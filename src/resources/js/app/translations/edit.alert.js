export function call(id, value, lang, key, dataTable, editRoute) {
    let locale = dataTable.dataTableSettings[0].oLanguage.sweetAlert;
    
    Swal.fire({
        title: locale.translations.title+' ['+lang+']',
        html: locale.translations.text +' '+'<b>'+ key+'</b>',
        type: 'info', 
        showCancelButton: true,
        input: 'text',
        inputValue: value,
        confirmButtonText: locale.buttons.confirm,
        cancelButtonText: locale.buttons.cancel,
        reverseButtons: true
    }).then(result => {
        if (result.value === "" || result.value) {
            saveTranslation(route(editRoute, id), {
                'value': result.value,
                'lang': lang
            }).then(() => {
                Toast.fire({
                    type: 'success',
                    title: locale.translations.success
                });
                dataTable.DataTable().ajax.reload(null, false);
            })
            .catch((error) => {
                Toast.fire({
                    type: 'error',
                    title: locale.translations.error
                });
                console.log(error);
            });
        }
    });
    
    function saveTranslation(route, params) {
        return axios.put(route, {
            params: params
        })
    }
}