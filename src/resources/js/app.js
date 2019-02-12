window.$ = window.jQuery = require('jquery');
require('bootstrap/dist/js/bootstrap.bundle');
require('popper.js');
require('admin-lte/plugins/select2/select2.full.min.js');
require('./vendor/adminlte');
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');

require('sweetalert/dist/sweetalert.min');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}

require('./app/datatables/users.datatable');
require('./app/datatables/roles.datatable');
require('./app/datatables/permissions.datatable');

require('./app/components/select2');
require('./app/components/togglePermissions');