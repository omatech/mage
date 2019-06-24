@php
    $availableLanguages = [];
    foreach(config('mage.translations.available_locales') as $language) {
        $availableLanguages[] = $language['locale'];
    }
@endphp

<table id="mage-translations-datatable"
       class="table table-bordered table-hover display" 
       style="width:100%" 
       data-langs="{{ json_encode($availableLanguages) }}">
    <thead>
        <tr>
            <th>@lang('mage.translations.datatable.field.id')</th>
            <th>@lang('mage.translations.datatable.field.group')</th>
            <th>@lang('mage.translations.datatable.field.key')</th>
            @foreach($availableLanguages as $language)
                <th>@lang('mage.translations.datatable.field.'.$language)</th>
            @endforeach
            <th>@lang('mage.translations.datatable.field.actions')</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>