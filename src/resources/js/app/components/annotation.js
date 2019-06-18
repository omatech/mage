jQ(document).ready(function () {
    jQ('.new-annotation').on('click', function() {
        let route = jQ(this).attr('data-model-route');
        let annotation = jQ(this).parent().parent().find('.annotation-text').val();

        jQ(this).attr('disabled', true);

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