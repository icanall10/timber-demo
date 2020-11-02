<div class="map-block">
    <div class="inner container">

        {!! $self->render('search-form') !!}

        <div id="map-{{ uniqid() }}"
             class="map"
             data-coords="{{ json_encode($self->getCenterCoords()) }}">
        </div>

    </div>
</div>