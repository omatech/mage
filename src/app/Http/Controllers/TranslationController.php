<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Omatech\Mage\App\Http\Requests\Translations\CreateRequest;
use Omatech\Mage\App\Repositories\Translation\CreateTranslation;
use Omatech\Mage\App\Repositories\Translation\DeleteTranslation;
use Omatech\Mage\App\Repositories\Translation\ExistsCreateTranslation;
use Omatech\Mage\App\Repositories\Translation\ExportTranslations;
use Omatech\Mage\App\Repositories\Translation\ImportTranslation;
use Omatech\Mage\App\Repositories\Translation\ListTranslationsDatatable;
use Omatech\Mage\App\Repositories\Translation\UpdateTranslation;

class TranslationController extends Controller
{
    public function index()
    {
        return view('mage::pages.translations.index');
    }

    public function list(ListTranslationsDatatable $translations)
    {
        $filter = request()->get('notTranslated');
        $filter = filter_var($filter, FILTER_VALIDATE_BOOLEAN);

        return $translations->make($filter);
    }

    public function create()
    {
        return view('mage::pages.translations.create');
    }

    public function store(CreateRequest $request, CreateTranslation $translation)
    {
        $data = $request->validated();

        $fields = [
            'key' => $data['translations_key'],
            'group' => $data['translations_group']
        ];

        foreach (config('mage.translations.available_locales') as $lang) {
            $lang = $lang['locale'];
            $fields["text->$lang"] = $data["translations_text-$lang"] ?? '';
        }

        $translation->make($fields);

        return redirect(route('mage.translations.index'))->with('status', 'created');
    }

    public function update($id, UpdateTranslation $update)
    {
        $params = request('params');

        $update->make($id, $params['lang'], $params['value']);
    }

    public function destroy(DeleteTranslation $translation, $id)
    {
        $translation = $translation->make($id);

        return response()->json(['status' => 'success']);
    }

    public function add(ExistsCreateTranslation $existsCreateTranslation)
    {
        $key = request()->key;
        $value = request()->value ?? null;

        $existsCreateTranslation->make($key, $value);

        return response()->json(['status' => 'OK']);
    }

    public function set($lang)
    {
        session(['locale' => $lang]);

        return redirect()->back();
    }

    public function export(ExportTranslations $exportTranslations)
    {
        return response()->download($exportTranslations->make())->deleteFileAfterSend(true);
    }

    public function import(ImportTranslation $importTranslation)
    {
        $file = request()->file('excel');
        $file = Storage::disk('local')
            ->putFileAs('translations', $file, 'excel_translations.xlsx');

        $importTranslation->make(storage_path('app/'.$file));

        Storage::disk('local')
            ->delete(storage_path('app/translation/excel_translations.xlsx'));

        return redirect()->back()->with('status', 'created');
    }
}
