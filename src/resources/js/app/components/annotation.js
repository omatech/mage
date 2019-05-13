$(document).ready(function () {
    $('.new-annotation').on('click', function() {
        let route = $(this).attr('data-model-route');
        let annotation = $(this).parent().parent().find('.annotation-text').val();

        $(this).attr('disabled', true);

        if (annotation !== "") {
            addAnnotation(route, annotation).then(() => {
                window.location.reload();
            }).catch((error) => {
                console.log(error)
            });
        }
    });

    function addAnnotation(route, annotation) {
        return axios.post(route, {'annotation': annotation});
    }
});