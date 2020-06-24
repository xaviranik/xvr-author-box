;(function($) {

    $('#xvr-author-box form').on('submit', function(e) {
        e.preventDefault();

        var data = $(this).serialize();

        $.post(xvrAuthorBox.ajaxurl, data, function(response) {
            if (response.success) {
                console.log(response.success);
            } else {
                // alert(response.data.message);
            }
        })
        .fail(function() {
            alert(xvrAuthorBox.error);
        })

    });

})(jQuery);