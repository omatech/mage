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
                            value = value.replace(/^"(.*)"jQ/, 'jQ1');

                            let key = row.group+'.'+row.key;
                            if(value === key) value = '__NOT TRANSLATED__';
                            if(value === "") value = '__EMPTY__';
                        }
    
                        return "<a href=\"#\" class=\"mage-translations-edit-btn\" data-id=\""+ row.id +"\" data-value=\""+value+"\" data-lang=\""+langs[index]+"\" data-key=\""+ row.key +"\">"+value+"</a>"
                    }
                },
            );
        });
    
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
            language: { 'url': route('mage.datatables.i18n') },
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

            mage.translations.editAlert(id, value, lang, key, adminTranslationsDatatable, 'mage.translations.update');
        });
    }
});
