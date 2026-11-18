<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Omatech\Mage\App\Models\Translation;
use Omatech\Mage\MageServiceProvider;
use Orchestra\Testbench\TestCase;

final class TranslationCommandCacheTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [MageServiceProvider::class];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');
        $app['config']->set('cache.default', 'array');
        $app['config']->set('app.locale', 'en');
        $app['config']->set('app.fallback_locale', 'en');
    }

    public function test_translation_commands_refresh_changed_groups_and_leave_other_cache_entries(): void
    {
        Schema::create('language_lines', static function (Blueprint $table): void {
            $table->id();
            $table->string('group');
            $table->string('key');
            $table->text('text');
            $table->timestamps();
        });
        $files = new Filesystem();
        $fixture = sys_get_temp_dir().'/mage-translations-'.bin2hex(random_bytes(8));
        $files->ensureDirectoryExists($fixture.'/views');
        $files->ensureDirectoryExists($fixture.'/lang/en');
        try {
            $files->put($fixture.'/views/home.blade.php', '<p>{{ __(\'fixture.welcome\') }}</p>');
            $files->put($fixture.'/lang/en/fixture.php', '<?php return [\'welcome\' => \'Welcome fixture\'];');
            config([
                'mage.translations.scan_paths' => [$fixture.'/views'],
                'mage.translations.import_path' => [$fixture.'/lang'],
                'mage.translations.available_locales' => [['locale' => 'en'], ['locale' => 'es']],
            ]);
            Cache::put('unrelated-cache-entry', 'preserve');
            Cache::put(Translation::getCacheKey('other', 'en'), ['title' => 'preserve']);
            self::assertSame([], Translation::getTranslationsForGroup('en', 'fixture'));

            $this->artisan('mage:translations-find')->assertSuccessful();
            self::assertSame(['welcome' => 'fixture.welcome'], Translation::getTranslationsForGroup('en', 'fixture'));
            self::assertSame(['welcome' => 'fixture.welcome'], Translation::getTranslationsForGroup('de', 'fixture'));

            $this->artisan('mage:translations-import')->assertSuccessful();
            self::assertSame(['welcome' => 'Welcome fixture'], Translation::getTranslationsForGroup('en', 'fixture'));
            self::assertSame(['welcome' => 'Welcome fixture'], Translation::getTranslationsForGroup('de', 'fixture'));
            self::assertSame('preserve', Cache::get('unrelated-cache-entry'));
            self::assertSame(['title' => 'preserve'], Cache::get(Translation::getCacheKey('other', 'en')));
        } finally {
            $files->deleteDirectory($fixture);
        }
    }
}
