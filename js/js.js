(function ($) {

    function behaviors() {

        $('.sort-form select[name="sort"]')
            .once('select2')
            .select2({
                theme: 'clear'
            });


        $('.filters-form select')
            .once('select2', function () {
                let $this = $(this);
                let placeholder = $this.data('search-placeholder');

                $this.select2({
                    searchInputPlaceholder: placeholder,
                    theme: 'filter'
                });
            });


        $('select:visible')
            .once('select2')
            .select2({
                theme: 'default'
            });


        $('[data-city-confirm-link]')
            .once()
            .click(function (e) {
                e.preventDefault();

                $(this).closest('[data-city-confirm]').addClass('confirmed');
            });


        $('.map-block .map')
            .once(function () {
                let $this = $(this);

                ymaps.ready(function () {
                    let id = $this.attr('id');

                    let coords = JSON.parse($this.attr('data-coords'));

                    let map = new ymaps.Map(id, {
                        center: coords,
                        zoom: 11,
                        controls: ['zoomControl']
                    });

                    map.behaviors.disable('scrollZoom');

                    let objectManager = new ymaps.ObjectManager({
                        clusterize: true,
                        gridSize: 32,
                        clusterDisableClickZoom: true
                    });

                    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
                    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');

                    objectManager.objects.events.add('click', function (e) {
                        let objectId = e.get('objectId');
                        let obj = objectManager.objects.getById(objectId);

                        $.request('MapBlock::onShowDetail', {
                            data: {
                                id: objectId
                            }
                        }).done(function (data) {
                            obj.properties.balloonContent = data;
                            objectManager.objects.balloon.open(objectId);

                            setTimeout(function () {
                                ajax_behaviors();
                            }, 0);
                        });
                    });

                    map.geoObjects.add(objectManager);

                    $this.data('object-manager', objectManager);

                    $.request('MapBlock::onLoadMapData', {
                        stripe: false
                    }).done(function (data) {
                        objectManager.add(data);
                    });
                });
            });


        $('.map-search-form')
            .once()
            .on('ajaxSuccess', function (e, data) {
                let objectManager = $(this)
                    .closest('.map-block')
                    .find('.map')
                    .data('object-manager');

                objectManager.removeAll();
                objectManager.add(data);
            });


        $('[data-product-page]')
            .once(function () {
                $(this).request(null, {
                    stripe: false
                });
            });


        $('.product-page .slider .main .owl-carousel')
            .once()
            .owlCarousel({
                items: 1,
                margin: 20,
                nav: false,
                dots: false
            });

        $('[data-product-page-slider] [data-thumb]')
            .once()
            .click(function () {
                let key = parseInt($(this).attr('data-key'));

                let owl = $(this)
                    .closest('[data-product-page-slider]')
                    .find('.owl-carousel');

                owl.trigger('to.owl.carousel', [key]);

                return false;
            });


        $('.company-page .map')
            .once(function () {
                let $this = $(this);

                ymaps.ready(function () {
                    let id = $this.attr('id');
                    let address = $this.data('address');
                    let coords = JSON.parse($this.attr('data-coords'));

                    let map = new ymaps.Map(id, {
                        center: coords,
                        zoom: 13,
                        controls: ['zoomControl']
                    });

                    map.behaviors.disable('scrollZoom');

                    let placemark = new ymaps.Placemark(coords, {
                        hintContent: address,
                        balloonContent: address
                    }, {
                        iconLayout: 'default#image',
                        iconImageHref: '/img/placemark.png',
                        iconImageSize: [30, 42],
                        iconImageOffset: [-15, -42]
                    });

                    map.geoObjects.add(placemark);
                });
            });


        $('.add-product-page .categories .items')
            .once(function () {
                $(this).masonry({
                    itemSelector: '.item',
                })
            });


        $('.image-field .upload')
            .once()
            .click(function () {
                $(this)
                    .closest('.image-field')
                    .find('input[type="file"]')
                    .click();

                return false;
            });


        $('.product-form .item-files .upload')
            .once()
            .click(function () {
                $(this)
                    .closest('form')
                    .find('input[name="files[]"]')
                    .click();

                return false;
            });


        $('.product-form .item-files .delete a')
            .once()
            .click(function () {
                $(this)
                    .closest('.file')
                    .remove();

                return false;
            });


        $('textarea[data-quill]')
            .once('quill', function () {
                let id = 'textarea_' + Math.random().toString(36).substr(2, 9);
                ;

                $(this).attr('id', id);

                quilljs_textarea('#' + id, {
                    modules: {
                        toolbar: [
                            ['bold', 'italic'],
                            [{'list': 'ordered'}, {'list': 'bullet'}],
                            // [{'header': [2, 3, false]}],
                            ['link', 'image']
                        ],
                        imageResize: {
                            modules: ['Resize',]
                        }
                    },
                    theme: 'snow',
                });
            });


        $('[data-forum-post-page-viewed]')
            .once(function () {
                $(this).request(null, {
                    stripe: false
                });
            });


        $('[data-mobile-menu-toggle]')
            .once()
            .click(function () {
                $('body').toggleClass('mobile-menu-open');

                return false;
            });


        $('[data-add-product-page-countries-list] li a')
            .once()
            .click(function () {
                let $this = $(this);
                let wrapper = $this.closest('[data-add-product-page-countries-list]');

                wrapper.find('li.active').removeClass('active');

                $this.closest('li').addClass('active');

                return false;
            });


        $('[data-add-product-page-regions-list] li a')
            .once()
            .click(function () {
                let $this = $(this);
                let wrapper = $this.closest('[data-add-product-page-regions-list]');

                wrapper.find('li.active').removeClass('active');

                $this.closest('li').addClass('active');

                return false;
            });


        $('body').once('responsive-tables', function () {
            window.responsiveTables.init();
        });


        $('.company-check .chart')
            .once(function () {
                let data = JSON.parse($(this).attr('data-values'));

                new Chart(this, {
                    type: 'line',
                    data: {
                        labels: [2016, 2017, 2018, 2019],
                        datasets: [
                            {
                                data: data,
                                backgroundColor: 'rgba(0, 0, 0, 0)',
                                borderColor: 'rgba(91, 154, 112, 1)'
                            }
                        ]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    callback: function (value, index, values) {
                                        return value / 1e6 + ' млн.';
                                    }
                                }
                            }]
                        },
                        tooltips: {
                            // Disable the on-canvas tooltip
                            enabled: false,

                            custom: function (tooltipModel) {
                                // Tooltip Element
                                var tooltipEl = document.getElementById('chartjs-tooltip');

                                // Create element on first render
                                if (!tooltipEl) {
                                    tooltipEl = document.createElement('div');
                                    tooltipEl.id = 'chartjs-tooltip';
                                    tooltipEl.innerHTML = '<table></table>';
                                    document.body.appendChild(tooltipEl);
                                }

                                // Hide if no tooltip
                                if (tooltipModel.opacity === 0) {
                                    tooltipEl.style.opacity = 0;
                                    return;
                                }

                                // Set caret Position
                                tooltipEl.classList.remove('above', 'below', 'no-transform');
                                if (tooltipModel.yAlign) {
                                    tooltipEl.classList.add(tooltipModel.yAlign);
                                } else {
                                    tooltipEl.classList.add('no-transform');
                                }

                                function getBody(bodyItem) {
                                    return bodyItem.lines;
                                }

                                // Set Text
                                if (tooltipModel.body) {
                                    var titleLines = tooltipModel.title || [];
                                    var bodyLines = tooltipModel.body.map(getBody);

                                    var innerHtml = '<thead>';

                                    titleLines.forEach(function (title) {
                                        innerHtml += '<tr><th>' + title + ' г.</th></tr>';
                                    });

                                    innerHtml += '</thead><tbody>';

                                    bodyLines.forEach(function (body, i) {
                                        var colors = tooltipModel.labelColors[i];
                                        var style = 'background:' + colors.backgroundColor;
                                        style += '; border-color:' + colors.borderColor;
                                        style += '; border-width: 2px';
                                        var span = '<span style="' + style + '"></span>';
                                        innerHtml += '<tr><td>' + span + (number_format(parseInt(body) / 1e6, 2, ',', ' ') + ' млн.') + '</td></tr>';
                                    });
                                    innerHtml += '</tbody>';

                                    var tableRoot = tooltipEl.querySelector('table');
                                    tableRoot.innerHTML = innerHtml;
                                }

                                // `this` will be the overall tooltip
                                var position = this._chart.canvas.getBoundingClientRect();

                                // Display, position, and set styles for font
                                tooltipEl.style.opacity = 1;
                                tooltipEl.style.position = 'absolute';
                                tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX + 10 + 'px';
                                tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY + 10 + 'px';
                                tooltipEl.style.fontFamily = tooltipModel._bodyFontFamily;
                                tooltipEl.style.fontSize = tooltipModel.bodyFontSize + 'px';
                                tooltipEl.style.fontStyle = tooltipModel._bodyFontStyle;
                                tooltipEl.style.padding = tooltipModel.yPadding + 'px ' + tooltipModel.xPadding + 'px';
                                tooltipEl.style.pointerEvents = 'none';
                                tooltipEl.style.background = '#E3EAE0';
                                tooltipEl.style.borderRadius = '4px';
                                tooltipEl.style.border = '1px solid #5B9A70';
                            }
                        }
                    }
                });
            });


        $('[data-check-notices]')
            .once(function () {
                let $this = $(this);

                setTimeout(function () {
                    $this.request(null, {
                        stripe: false
                    });
                }, 8000)
            });

    }


    $(document).click(function (event) {
        let selectors = '.city-autocomplete';

        let $target = $(event.target);

        if (!$target.closest(selectors).length &&
            $(selectors).is(":visible")) {
            $(selectors).hide();
        }
    });


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });

})(jQuery);