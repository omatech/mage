export function call(id, dataTable, destroyRoute) {
    let locale = dataTable.dataTableSettings[0].oLanguage.sweetAlert;

    swal(Object.assign(locale, {
        icon: "warning",
        dangerMode: true,
    }))
    .then((willDelete) => {
        if (willDelete) {
            axios.delete(route(destroyRoute, id)).then(() => {
                swal(locale.success, {
                    icon: "success",
                    buttons: locale.close
                }).then(() => {
                    dataTable.DataTable().ajax.reload();
                });
            })
            .catch((error) => {
                console.log(error);
            });
        }
    });
}