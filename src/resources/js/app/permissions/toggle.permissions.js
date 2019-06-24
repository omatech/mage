jQ(document).ready(function () {
    let rolePermissions = jQ('.mage-role-permission');
    rolePermissions.on('change', function(e) {
        let ids = [];
        let checkeds = jQ('.mage-role-permission:checked');
        checkeds.map(function(index, item) {
            ids.push(item.value);
        });

        setPermissions(ids).then(function() {
            Toast.fire({
                type: 'success',
                title: trans('mage.permissions.toggle')
            });
        });
    });

    function setPermissions(permissions) {
        let id = jQ('#rol-id').val();
        return axios.post(route('mage.roles.permissions.assign', id), {permissions: permissions});
    }
});