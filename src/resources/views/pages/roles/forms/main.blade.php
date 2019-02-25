<div class="card-body">
    <div class="form-group">
        <label for="mage-roles-name">@lang('mage.roles.form.name')</label>
        <input name="roles_name" type="text" class="form-control @if($errors->has('roles_name')) is-invalid @endif" id="mage-roles-name" placeholder="@lang('mage.roles.form.name.placeholder')"
           value="{{ old('roles_name', $role->name ?? '') }}">
    </div>
</div>
<div class="card-footer">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">@lang('mage.roles.form.save')</button>
</div>