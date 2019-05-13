<?php

namespace Omatech\Mage\App\Repositories\Translation;

class ExistsCreateTranslation
{
    private $exists;
    private $create;

    public function __construct(ExistsTranslation $exists, CreateTranslation $create)
    {
        $this->exists = $exists;
        $this->create = $create;
    }

    public function make($key, $value = null)
    {
        $key = $this->parseKey($key);
        $exists = $this->exists->make($key);

        if(!$exists) {
            $fields = $key;
            foreach (config('mage.translations.available_locales') as $lang) {
                $lang = $lang['locale'];
                $fields["text->$lang"] = $key['group'].'.'.$key['key'];
            }

            if($value) {
                $lang = app()->getLocale();
                $fields["text->$lang"] = $value;
            }

            $this->create->make($fields);
        }

        return $exists;
    }

    private function parseKey($key)
    {
        $key = explode('.', $key);

        if(count($key) > 1) {
            $group = $key[0];

            array_splice($key, 0, 1);
            $key = join('.', $key);
        } else {
            $key = $key[0];
            $group = 'single';
        }

        return [
            'group' => $group,
            'key' => $key
        ];
    }
}
