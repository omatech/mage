<div class="card-body">
    <div class="form-group">
        <label for="mage-users-name">@lang('mage.users.form.name.label')</label>
        <input name="users_name" type="text" class="form-control @if($errors->has('users_name')) is-invalid @endif" id="mage-users-name" placeholder="@lang('mage.users.form.name.placeholder')" value="{{ old('users_name', $user->name ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-email">@lang('mage.users.form.email.label')</label>
        <input name="users_email" type="text" class="form-control @if($errors->has('users_email')) is-invalid @endif" id="mage-users-email" placeholder="@lang('mage.users.form.email.placeholder')" value="{{ old('users_email', $user->email ?? '') }}">
    </div>
    <div class="form-group">
        <label for="mage-users-language">@lang('mage.users.form.language.label')</label>
        <select name="users_language" class="form-control select2 @if($errors->has('users_language')) is-invalid @endif" id="mage-users-language" placeholder="@lang('mage.users.form.language.placeholder')">
            @foreach(config('mage.translations.available_locales') as $locale)
                <option value="{{ $locale['locale'] }}" @if(isset($user) && $user->language == $locale['locale'] || $locale['locale'] == old('users_language')) selected @endif>@lang($locale['name_key'])</option>
            @endforeach
        </select>
    </div>
    <div class="form-group @if($errors->has('users_roles')) is-invalid @endif">
        <label for="mage-users-roles">@lang('mage.users.form.roles.label')</label>
        <select name="users_roles[]" id="mage-users-roles" class="form-control select2 @if($errors->has('users_roles')) is-invalid @endif" multiple="multiple" data-placeholder="@lang('mage.users.form.roles.placeholder')" style="width: 100%;">
            @foreach ($roles as $role)
                <option value="{{$role->name}}" @if(isset($user) && $user->hasRole($role->name) || in_array($role->name, old('users_roles', []))) selected @endif>{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="card-footer">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">@lang('mage.users.form.save')</button>
</div>
