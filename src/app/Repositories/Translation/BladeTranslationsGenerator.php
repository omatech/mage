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
        $debug = env('APP_ENV') == 'local';

        $script = "<script type=\"text/javascript\">
            window.Translations = $trans;
        </script>";

        $isMageRoute = config('prefix').'*';
        $isMageRoute = isRoute($isMageRoute);

        if (!$isMageRoute) {
            if ($debug) {
                $script .= "<script src=\"/vendor/mage/mage.js\"></script>";
                $script .= $this->routerGenerator->generate();
            } else {
                $script .= "<script type=\"text/javascript\">
                    function normalizeParams(r){if(void 0===r)return{};if(\"object\"!=typeof r)throw new Error(\"Translator Error: Invalid parameters format\");return r}function replaceParams(r,a){return Object.keys(a).forEach(function(n){r=r.replace(\":\"+n,a[n])}),r}window.t=function(r,a=null,n={}){if(null==a)return r;var e=Translations[a];return void 0===e?r:e=replaceParams(e,n=normalizeParams(n))};
                    window.trans=function(a,b={}){if(null==a)return a;var c=Translations[a];return void 0===c?a:(b=normalizeParams(b),c=replaceParams(c),c)};function normalizeParams(a){if(\"undefined\"==typeof a)return{};if(\"object\"!=typeof a)throw new Error(\"Translator Error: Invalid parameters format\");return a}function replaceParams(a,b){return Object.keys(b).forEach(function(c){a=a.replace(\":\"+c,b[c])}),a}
                </script>";
            }
        }

        return $script;
    }
}
