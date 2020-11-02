(function ($) {

    function behaviors() {

        $('[data-alert]')
            .once('flash')
            .on('hideOther', function () {
                $('[data-alert]').not(this).fadeOut(350);
            })
            .on('showMessage', function () {
                $(this).fadeIn(350);
            })
            .on('hideMessage', function () {
                $(this).fadeOut(350);
            })
            .click(function () {
                $(this).trigger('hideMessage');
            })
            .first()
            .each(function () {
                let $this = $(this);

                $this.trigger('hideOther');
                $this.trigger('showMessage');

                setTimeout(function () {
                    $this.trigger('hideMessage');
                }, 6000);
            });

    }


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });


    var Flash = function () {
    };

    Flash.prototype.success = function (message) {
        $('body').append('<div class="alert alert-success" data-alert>' + message + '</div>');

        behaviors();
    };

    Flash.prototype.error = function (message) {
        $('body').append('<div class="alert alert-error" data-alert>' + message + '</div>');

        behaviors();
    };

    flash = new Flash();

})(jQuery);