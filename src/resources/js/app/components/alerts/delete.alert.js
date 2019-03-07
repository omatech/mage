export function call(id, dataTable, deleteRoute, model) {
    let locale = dataTable.dataTableSettings[0].oLanguage.sweetAlert;
    
    Swal.fire({
        title: model.title,
        text: model.text,
        type: 'error', 
        showCancelButton: true,
        confirmButtonText: locale.buttons.confirm,
        cancelButtonText: locale.buttons.cancel,
        reverseButtons: true,
        focusCancel: true
    }).then(result => {
        if (result.value === "" || result.value) {
            deleteResource(route(deleteRoute, id)).then(() => {
                Toast.fire({
                    type: 'success',
                    title: model.success
                });
                dataTable.DataTable().ajax.reload(null, false);
            })
            .catch((error) => {
                Toast.fire({
                    type: 'error',
                    title: model.error
                });
                console.log(error);
            });
        }
    });
    
    function deleteResource(route, id) {
        return axios.delete(route, id);
    }
}