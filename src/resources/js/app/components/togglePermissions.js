$(document).ready(function () {
    let $rolePermissions = $('.mage-role-permission');
    $rolePermissions.on('change', function(e) {
        let ids = [];
        let $checkeds = $('.mage-role-permission:checked');
        $checkeds.map(function(index, item) {
            ids.push(item.value);
        });

        setPermissions(ids);
    });

    function setPermissions(permissions) {
        let id = $('#rol-id').val();
        axios.post(route('mage.roles.permissions.assign', id), {permissions: permissions});
    }
});