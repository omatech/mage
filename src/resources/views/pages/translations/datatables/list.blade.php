<table id="mage-translations-datatable" 
       class="table table-bordered table-hover display" 
       style="width:100%" 
       data-langs="{{ json_encode(config('mage.translations.available_locales')) }}">
    <thead>
        <tr>
            <th>@lang('mage.translations.datatable.field.id')</th>
            <th>@lang('mage.translations.datatable.field.group')</th>
            <th>@lang('mage.translations.datatable.field.key')</th>
            @foreach(config('mage.translations.available_locales') as $language)
                <th>@lang('mage.translations.datatable.field.'.$language)</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>