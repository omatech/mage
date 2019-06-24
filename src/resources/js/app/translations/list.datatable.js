jQ(document).ready(function () {
    let adminTranslationsDatatable = jQ('#mage-translations-datatable');

    if(adminTranslationsDatatable.length > 0) {
        let langs = JSON.parse(adminTranslationsDatatable.attr('data-langs'));
   
        let columns = [
            { data: 'id', name: 'id' },
            { data: 'group', name: 'group' },
            { data: 'key', name: 'key' }
        ];
    
        Object.keys(langs).forEach(function(index) {
            columns.push(
                { data: langs[index], name: 'text->'+langs[index], render(data, type, row)
                    {
                        let value = null;
                        if(data == null) value = '__NOT TRANSLATED__';
                        else {
                            value = data.replace(/&quot;/g, '"');
                            value = value.replace(/^"(.*)"$/, '$1');

                            let key = row.group+'.'+row.key;
                            if(value === key) value = '__NOT TRANSLATED__';
                            if(value === "") value = '__EMPTY__';
                        }
    
                        return "<a href=\"#\" class=\"mage-translations-edit-btn\" data-id=\""+ row.id +"\" data-value=\""+value+"\" data-lang=\""+langs[index]+"\" data-key=\""+ row.key +"\">"+value+"</a>"
                    }
                },
            );
        });

        columns.push({
            data: null, searchable: false, orderable: false, render: function(data, type, row) {
                return "" +
                "<div class=\"btn-group\" role=\"group\">" +
                  "<a class=\"mage-translations-delete-btn\" data-key=\"" + row.key + "\" data-id=\"" + data.id + "\">" +
                    "<button type=\"button\" data-key=\"" + row.key + "\" data-id=\"" + data.id + "\" class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\">\n" +
                      "<i data-key=\"" + row.key + "\" data-id=\"" + data.id + "\" class=\"fa fa-trash\"></i>" +
                    "</button>" +
                  "</a>" +
                "</div>";
            }
        })
    
        adminTranslationsDatatable.DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: route('mage.translations.list').url(),
                data: function (d) {
                    d.notTranslated = jQ('#translations-not-translated').is(':checked');
                }
            },
            deferRender: true,
            rowId: 'id',
            language: window.dataTablesLocales(),
            paging: true,
            lengthChange: true,
            lengthMenu: [10, 25, 50, 100],
            pageLength: 50,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: true,
            scrollX: true,
            columns: columns
        });

        jQ('#translations-not-translated').on('change', function() {
            adminTranslationsDatatable.DataTable().ajax.reload(null, false);
        });

        adminTranslationsDatatable.on('click', '.mage-translations-edit-btn', function(e) {
            e.preventDefault();
            let id = jQ(e.target).attr('data-id');
            let value = jQ(e.target).attr('data-value');
            let lang = jQ(e.target).attr('data-lang');
            let key = jQ(e.target).attr('data-key');

            editAlert(id, value, lang, key);
        });

        adminTranslationsDatatable.on('click', '.mage-translations-delete-btn', function(e) {
            let id = jQ(e.target).attr('data-id');
            let key = jQ(e.target).attr('data-key');

            let locale = {
              "title"   : trans('mage.datatable.sweetalert.translations.delete.title'),
              "text"    : trans('mage.datatable.sweetalert.translations.delete.text', {value: key}),
              "success" : trans('mage.datatable.sweetalert.translations.delete.success'),
              "error"   : trans('mage.datatable.sweetalert.translations.delete.error'),
            }
    
            window.deleteAlert(id, adminTranslationsDatatable, 'mage.translations.destroy', locale);
        });
    }

    let editAlert = function(id, value, lang, key) {
        let locale = {
            "title" : trans('mage.datatable.sweetalert.translations.title'),
            "text" : trans('mage.datatable.sweetalert.translations.text'),
            "success" : trans('mage.datatable.sweetalert.translations.success'),
            "error" : trans('mage.datatable.sweetalert.translations.error'),
            "confirm" : trans('mage.datatables.sweetalert.buttons.confirm'),
            "cancel": trans('mage.datatables.sweetalert.buttons.cancel')
        } 

        Swal.fire({
            title: locale.title+' ['+lang+']',
            html: locale.text +' '+'<b>'+ key+'</b>',
            type: 'info', 
            showCancelButton: true,
            input: 'text',
            inputValue: value,
            confirmButtonText: locale.confirm,
            cancelButtonText: locale.cancel,
            reverseButtons: true
        }).then(result => {
            if (result.value === "" || result.value) {
                saveTranslation(route('mage.translations.update', id), {
                    'value': result.value,
                    'lang': lang
                }).then(() => {
                    Toast.fire({
                        type: 'success',
                        title: locale.success
                    });
                    adminTranslationsDatatable.DataTable().ajax.reload(null, false);
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
        
        function saveTranslation(route, params) {
            return axios.put(route, {
                params: params
            })
        }
    }
});
