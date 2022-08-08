<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Tightenco\Ziggy\BladeRouteGenerator;

class BladeTranslationsGenerator
{
    private $getTranslations;

    public function __construct(GetTranslations $getTranslations, BladeRouteGenerator $routerGenerator)
    {
        $this->getTranslations = $getTranslations;
        $this->routerGenerator = $routerGenerator;
    }

    public function make($group = null)
    {
        $translations = $this->getTranslations->make($group);

        $arr = [];

        foreach ($translations as $translation) {
            $arr[$translation['key']] = $translation['value'];
        }

        return $this->generateJS($arr);
    }

    private function generateJS($trans)
    {
        $trans = json_encode($trans);
        $debug = config('app.env') == 'prod';

        $script = null;
        $scriptTrans = "window.Translations = $trans;";

        if (!$debug) {
            $route = url(route('mage.translations.add'));

            $script = file_get_contents(__DIR__.'/../../../resources/js/app/translations/t.js');
            $script2 = file_get_contents(__DIR__.'/../../../resources/js/app/translations/trans.js');

            $script = str_replace('###ROUTE###', $route, $script);
            $script2 = str_replace('###ROUTE###', $route, $script2);

            $script = "<script type=\"text/javascript\">\n$scriptTrans\n$script\n$script2\n</script>";
        } else {
            $script = file_get_contents(__DIR__.'/../../../resources/js/app/translations/t.public.js');
            $script2 = file_get_contents(__DIR__.'/../../../resources/js/app/translations/trans.public.js');

            $script = "<script type=\"text/javascript\">\n$scriptTrans\n$script\n$script2\n</script>";
        }

        return $script;
    }
}
