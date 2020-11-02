(function ($) {

    ajax_behaviors = function () {

        $('[data-request]')
            .once('ajaxSubmit')
            .on('ajaxSubmit', function (e, handler, options, element) {
                if (e.target !== e.currentTarget) return;

                if (element && element.hasClass('ajax-processing')) return;

                options = options || {};

                let $this = $(this);

                handler = handler || $this.attr('data-request');

                $this.request(handler, options, $this, element);
            })
            .on('ajaxSuccessDefault', function (e, data) {
                if (e.target !== e.currentTarget) return;

                data = data || {};

                if ('ajax_redirect_url' in data) {
                    return top.location.href = data.ajax_redirect_url;
                }

                if ('ajax_page_url' in data) {
                    history.pushState(null, data.ajax_page_title, data.ajax_page_url)
                }

                $(this).trigger('ajaxFlash', [data, 'success']);
                $(this).trigger('ajaxSuccess', [data]);
            })
            .on('ajaxErrorDefault', function (e, data) {
                if (e.target !== e.currentTarget) return;

                data = data || {};

                $(this)
                    .trigger('ajaxFlash', [data, 'error'])
                    .trigger('ajaxError', [data]);
            })
            .on('ajaxSuccess', function (e, data) {
                if (e.target !== e.currentTarget) return;

                $(this).trigger('ajaxUpdate', [data]);
            })
            .on('ajaxUpdate', function (e, data) {
                if (e.target !== e.currentTarget) return;

                data = data || {};

                for (var key in data) {
                    if (key.substr(0, 1) === '@') {
                        $(key.substr(1)).append(data[key]);
                    } else if (key.substr(0, 1) === '-') {
                        $(key.substr(1)).replaceWith(data[key]);
                    } else if (key.substr(0, 1) === '^') {
                        $(key.substr(1)).prepend(data[key]);
                    } else {
                        $(key).html(data[key]);
                    }
                }
            })
            .on('ajaxFlash', function (e, data, type) {
                if (e.target !== e.currentTarget) return;

                if ('flash' in data) {
                    $.each(data.flash, function (type, message) {
                        switch (type) {
                            case 'success':
                                flash.success(message);
                                break;

                            case 'error':
                                flash.error(message);
                                break;
                        }
                    });
                }

                if (!data.responseJSON) return;

                let message = data.responseJSON.message;
                let errors = data.responseJSON.errors;

                if (errors) {
                    let key = Object.keys(errors)[0];

                    message = errors[key];

                    if (Array.isArray(message)) {
                        message = message[0];
                    }

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


        $('a[data-request]')
            .once('ajaxSubmitButton')
            .click(function (e) {
                e.preventDefault();

                let $this = $(this);
                let handler = $this.attr('data-request');
                let options = {
                    data: JSON.parse($this.attr('data-request-data') || '{}')
                };

                $this.trigger('ajaxSubmit', [handler, options, $this]);

                return false;
            });


        $('button[data-request], form[data-request] button[type="submit"]')
            .once('ajaxSubmitButton')
            .click(function (e) {
                e.preventDefault();

                let $this = $(this);
                let form = $this.closest('form');
                let handler = $this.attr('data-request') || form.attr('data-request');

                let options = {
                    data: JSON.parse($this.attr('data-request-data') || '{}')
                };

                form.trigger('ajaxSubmit', [handler, options, $this]);
            });


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
            .on('trackInputCallback', function () {
                let $this = $(this);
                let form = $this.closest('form');
                let handler = $this.attr('data-request') || form.attr('data-request');

                let options = {
                    data: JSON.parse($this.attr('data-request-data') || '{}')
                };

                form.trigger('ajaxSubmit', [handler, options, $this]);
            })
            .keyup(function (e) {
                $(this).trigger('trackInput');
            })
            .change(function () {
                $(this).trigger('trackInput');
            });


        $('select[data-request], input[type="radio"][data-request], input[type="checkbox"][data-request], input[type="file"][data-request]')
            .once('ajaxSubmitButton')
            .change(function (e) {
                let $this = $(this);
                let form = $this.closest('form');
                let handler = $this.attr('data-request') || form.attr('data-request');

                let options = {
                    data: JSON.parse($this.attr('data-request-data') || '{}')
                };

                form.trigger('ajaxSubmit', [handler, options, $this]);
            });

    };


    $.fn.request = function (handler, options, form, element) {
        element = element || $(this);
        form = form || element.closest('form');

        $.request(handler, options, form, element);
    };


    $.request = function (handler, options, form, element) {
        options = options || {};
        handler = handler || ((element || form).data('request'));

        let formOrElement = form || element;
        let tagName = formOrElement ? formOrElement.prop('tagName') : null;
        let isFrom = (tagName && tagName.toLowerCase() === 'form');
        let data = isFrom === true ? new FormData(form[0]) : new FormData;

        let json = formOrElement ? formOrElement.attr('data-request-data') : null;
        let jsonData = json ? JSON.parse(json || '') : {};

        $.each(jsonData, function (key, value) {
            data.append(key, value || '');
        });

        if (element) {
            element.addClass('ajax-processing');
        }

        $.each(options.data || {}, function (key, value) {
            data.append(key, value || '');
        });

        data.append('handler', handler);

        let optionsDefault = {
            type: 'post',
            cache: false,
            processData: false,
            contentType: false,
            success: function (data) {
                if (form) {
                    form.trigger('ajaxSuccessDefault', [data]);
                }

                if (element) {
                    element.removeClass('ajax-processing');
                }

                stripe.hide();
            },
            error: function (data) {
                if (form) {
                    form.trigger('ajaxErrorDefault', [data]);
                }

                if (element) {
                    element.removeClass('ajax-processing');
                }

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
        ajax_behaviors();
    });


    $(document).ajaxComplete(function () {
        ajax_behaviors();
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

})(jQuery);