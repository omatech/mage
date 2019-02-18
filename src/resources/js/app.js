window.$ = window.jQuery = require('jquery');
require('bootstrap/dist/js/bootstrap.bundle');
require('popper.js');
require('select2/dist/js/select2.full');
require('datatables.net/js/jquery.dataTables');
require('datatables.net-bs4/js/dataTables.bootstrap4');
require('feather-icons/dist/feather.js').replace();
require('sweetalert/dist/sweetalert.min');
require('./vendor/admin-lte/AdminLTE.js');

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