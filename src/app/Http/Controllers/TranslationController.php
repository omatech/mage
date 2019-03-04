<?php

namespace Omatech\Mage\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Omatech\Mage\App\Http\Requests\Translations\CreateRequest;
use Omatech\Mage\App\Repositories\Translation\UpdateTranslation;
use Omatech\Mage\App\Repositories\Translation\ListTranslationsDatatable;
use Omatech\Mage\App\Repositories\Translation\CreateTranslation;

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
}
