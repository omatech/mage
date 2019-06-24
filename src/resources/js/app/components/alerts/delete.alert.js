window.deleteAlert = function(id, dataTable, deleteRoute, locale) {    
    Swal.fire({
        title: locale.title,
        html: locale.text,
        type: 'error', 
        showCancelButton: true,
        confirmButtonText: trans('mage.datatables.sweetalert.buttons.confirm'),
        cancelButtonText: trans('mage.datatables.sweetalert.buttons.cancel'),
        reverseButtons: true,
        focusCancel: true
    }).then(result => {
        if (result.value === "" || result.value) {
            deleteResource(route(deleteRoute, id)).then(() => {
                Toast.fire({
                    type: 'success',
                    title: locale.success
                });
                dataTable.DataTable().ajax.reload(null, false);
            })
            .catch((error) => {
                Toast.fire({
                    type: 'error',
                    title: locale.error
                });
                console.error(error);
            });
        }
    });
    
    function deleteResource(route, id) {
        return axios.delete(route, id);
    }
}