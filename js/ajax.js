(function ($) {

    function behaviors() {

        $('[data-track-input]')
            .once('trackInput')
            .on('trackInput', function () {
                let $this = $(this);
                let duration = parseInt($this.data('track-input'));
                let timeout = $this.data('trackInputTimeout');

                if (timeout) {
                    clearTimeout(timeout);
                }

                timeout = setTimeout(function () {
                    $this.trigger('trackInputCallback');
                }, duration);

                $this.data('trackInputTimeout', timeout);
            })
            .keyup(function (e) {
                $(this).trigger('trackInput');
            })
            .change(function () {
                $(this).trigger('trackInput');
            });


        $('form, a[data-ajax]')
            .once('ajaxSubmit')
            .on('ajaxSubmit', function (e, handler) {
                if (e.target !== e.currentTarget) return;

                let $this = $(this);

                handler = handler || $this.attr('data-ajax');

                $this.request(handler, {}, this);
            })
            .on('ajaxSuccessDefault', function (e, data) {
                $(this).trigger('ajaxSuccess', data);

                if ('ajax_redirect' in data) {
                    return top.location.href = data.ajax_redirect;
                }

                $(this).trigger('ajaxFlash', [data, 'success']);
            })
            .on('ajaxErrorDefault', function (e, data) {
                $(this)
                    .trigger('ajaxFlash', [data, 'error'])
                    .trigger('ajaxError', data);
            })
            .on('ajaxSuccess', function (e, data) {
                $(this).trigger('ajaxUpdate', data);
            })
            .on('ajaxUpdate', function (e, data) {
                for (var key in data) {
                    if (key.substr(0, 1) === '@') {
                        $(key.substr(1)).append(data[key]);
                    } else {
                        $(key).html(data[key]);
                    }
                }
            })
            .on('ajaxFlash', function (e, data, type) {
                if (!data.responseJSON) return;

                let message = data.responseJSON.message;
                let errors = data.responseJSON.errors;

                if (errors) {
                    let key = Object.keys(data.responseJSON.errors)[0];

                    message = errors[key];

                    $(this)
                        .find('input[name="' + key + '"], textarea[name="' + key + '"]')
                        .first()
                        .focus();
                }

                if (message) {
                    switch (type) {
                        case 'success':
                            flash.success(message);
                            break;

                        case 'error':
                            flash.error(message);
                            break;
                    }
                }
            });


        $('a[data-ajax]')
            .once('ajaxSubmitButton')
            .click(function (e) {
                e.preventDefault();

                let $this = $(this);
                let handler = $this.attr('data-ajax');

                $this.trigger('ajaxSubmit', handler);

                return false;
            });


        $('button[type="submit"][data-ajax], form[data-ajax] button[type="submit"]')
            .once('ajaxSubmitButton')
            .click(function (e) {
                e.preventDefault();

                let $this = $(this);
                let form = $this.closest('form');
                let handler = $this.attr('data-ajax') || form.attr('data-ajax');

                form.trigger('ajaxSubmit', handler);
            });


        $('input[data-ajax][data-track-input]')
            .once('ajaxSubmit')
            .on('trackInputCallback', function () {
                let $this = $(this);
                let form = $this.closest('form');
                let handler = $this.attr('data-ajax') || form.attr('data-ajax');

                form.trigger('ajaxSubmit', handler);
            });

    }


    $.fn.request = function (handler, options) {
        $.request(handler, options, this);
    };


    $.request = function (handler, options, element) {
        options = options || {};

        $this = element ? $(element) : null;

        let isFrom = ($this && $this.prop('tagName').toLowerCase() === 'form');
        let data = isFrom === true ? new FormData($this[0]) : new FormData;

        if ($this) {
            let json = $this.attr('data-ajax-data');
            let jsonData = json ? JSON.parse(json ?? '') : {};

            $.each(jsonData, function (key, value) {
                data.append(key, value);
            });
        }

        let originalData = options.data || {};

        $.each(originalData, function (key, value) {
            data.append(key, value);
        });

        data.append('handler', handler);

        let optionsDefault = {
            type: 'post',
            processData: false,
            contentType: false,
            success: function (data) {
                if ($this) $this.trigger('ajaxSuccessDefault', data);

                stripe.hide();
            },
            error: function (data) {
                if ($this) $this.trigger('ajaxErrorDefault', data);

                stripe.hide();
            },
            stripe: true
        };

        options = {...optionsDefault, ...options};
        options.data = data;

        if (options.stripe) {
            stripe.show();
        }

        return $.ajax('/ajax', options);
    };


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

})(jQuery);