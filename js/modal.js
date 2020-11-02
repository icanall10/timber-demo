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


        $('[data-modal-close]')
            .once()
            .click(function () {
                $(this)
                    .closest('[data-modal]')
                    .magnificPopup('close');

                return false;
            });

    }


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });

})(jQuery);