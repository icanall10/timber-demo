(function ($) {

    function behaviors() {

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
                        zoom: 10,
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

    }


    $(document).ready(function () {
        behaviors();
    });


    $(document).ajaxComplete(function () {
        behaviors();
    });

})(jQuery);