<div class="card-body">
    <div class="form-group">
        <label for="mage-permissions-name">@lang('mage.pages.permissions.form.name')</label>
        <input name="permissions_name" type="text" class="form-control @if($errors->has('permissions_name')) is-invalid @endif" id="mage-permissions-name" placeholder="@lang('mage.pages.permissions.form.name.placeholder')"
            value="{{ old('permissions_name', $permission->name ?? '') }}">
    </div>
</div>
<div class="card-footer">
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">@lang('mage.pages.permissions.form.save')</button>
</div>