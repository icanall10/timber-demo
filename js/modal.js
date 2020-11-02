(function ($) {

    function behaviors() {

        $('[data-modal]')
            .once('modal')
            .on('modalOpen', function () {
                $.magnificPopup.open({
                    items: {
                        src: this
                    },
                    type: 'inline',
                    mainClass: $(this).attr('data-modal'),
                    closeOnBgClick: false,
                    showCloseBtn: true
                });
            })
            .trigger('modalOpen');

    }


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });

})(jQuery);