<?php
use Illuminate\Support\Facades\Route;
use Omatech\Mage\MageServiceProvider;
use Omatech\Mage\App\Providers\ConfigurationServiceProvider;
use Orchestra\Testbench\TestCase;

final class ServiceProviderTest extends TestCase
{
    protected function getPackageProviders($app): array { return [MageServiceProvider::class]; }
    protected function defineEnvironment($app): void
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite.database', ':memory:');
    }
    public function test_the_package_boots_and_registers_configuration_and_admin_routes_on_laravel13(): void
    {
        self::assertNotEmpty(config('mage'));
        self::assertTrue($this->app->providerIsLoaded(ConfigurationServiceProvider::class));
        self::assertNotEmpty(Route::getRoutes()->getRoutes());
        self::assertTrue($this->app->bound('translator'));
    }
}
