<?php

namespace Omatech\Mage\App\Repositories\Translation;

use Illuminate\Support\Facades\DB;
use Omatech\Mage\App\Repositories\TranslationBaseRepository;
use Yajra\DataTables\DataTables;

class ListTranslationsDatatable extends TranslationBaseRepository
{
    public function make($onlyNotTranslated = false)
    {
        $translations = $this->query();

        $select = ['id','group','key'];

        foreach(config('mage.translations.available_locales') as $lang) {
            $select[] = "text->$lang as $lang";
        }

        if($onlyNotTranslated) {
            $translations->where(function ($q) {
                foreach (config('mage.translations.available_locales') as $lang) {
                    $q->orWhereColumn(DB::raw("CONCAT(`group`, '.', `key`)"), '=', "text->$lang");
                }
            });
        }
        $translations = $translations->select($select);

        return Datatables::of($translations)->make(true);
    }
}
