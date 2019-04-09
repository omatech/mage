<div class="card-body">
    @method('POST')
    <div class="form-group">
        <label for="mage-translations-group">@lang('mage.translations.form.group')</label>
        <input class="form-control" id="mage-translations-group" type="text" name="translations_group" placeholder="@lang('mage.translations.form.group')">
    </div>
    <div class="form-group">
        <label for="mage-translations-key">@lang('mage.translations.form.key')</label>
        <input class="form-control" id="mage-translations-key" type="text" name="translations_key" placeholder="@lang('mage.translations.form.key')">
    </div>
    @foreach(config('mage.translations.available_locales') as $lang)
        @php $lang = $lang['locale'] @endphp
    <div class="form-group">
        <label for="mage-translations-text-{{$lang}}">@lang("mage.translations.form.text-$lang")</label>
        <input class="form-control" id="mage-translations-text-{{$lang}}" type="text" name="translations_text-{{$lang}}" placeholder="@lang("mage.translations.form.text-$lang")">
    </div>    
    @endforeach
</div>
<div class="card-footer">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">@lang('mage.translations.form.save')</button>
</div>