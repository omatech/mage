$(document).ready(function () {
    $('.new-annotation').on('click', function() {
        let route = $(this).attr('data-model-route');

        Swal.fire({
            title: 'test',
            input: 'textarea',
            inputPlaceholder: 'Type your message here...',
            showCancelButton: true,
            reverseButtons: true,
            focusCancel: true
        }).then(result => {
            if (result.value === "" || result.value) {
                addAnnotation(route, result.value).then(() => {
                    Toast.fire({
                        type: 'success',
                        title: 'ok'
                    });
                }).catch((error) => {
                    Toast.fire({
                        type: 'error',
                        title: 'error'
                    });
                    console.log(error)
                });
            }
        });
    });

    function addAnnotation(route, annotation) {
        return axios.post(route, {'annotation': annotation});
    }
});