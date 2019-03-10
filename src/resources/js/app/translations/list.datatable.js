$(document).ready(function () {
    let $adminTranslationsDatatable = $('#mage-translations-datatable');

    if($adminTranslationsDatatable.length > 0) {
        let langs = JSON.parse($adminTranslationsDatatable.attr('data-langs'));
   
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

                            let key = row.group+'.'+row.key;
                            if(value === key) value = '__NOT TRANSLATED__';
                        }
    
                        return "<a href=\"#\"class=\"mage-translations-edit-btn\" data-id=\""+ row.id +"\" data-value=\""+value+"\" data-lang=\""+langs[index]+"\" data-key=\""+ row.key +"\">"+value+"</a>"
                    }
                },
            );
        });
    
        $adminTranslationsDatatable.DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: route('mage.translations.list').url(),
                data: function (d) {
                    d.notTranslated = $('#translations-not-translated').is(':checked');
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

        $('#translations-not-translated').on('change', function() {
            $adminTranslationsDatatable.DataTable().ajax.reload(null, false);
        });

        $adminTranslationsDatatable.on('click', '.mage-translations-edit-btn', function(e) {
            e.preventDefault();
            let id = $(e.target).attr('data-id');
            let value = $(e.target).attr('data-value');
            let lang = $(e.target).attr('data-lang');
            let key = $(e.target).attr('data-key');

            mage.translations.editAlert(id, value, lang, key, $adminTranslationsDatatable, 'mage.translations.update');
        });
    }
});
