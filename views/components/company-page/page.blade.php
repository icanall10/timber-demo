@php($model = $self->getModel())

<div class="company-page page">
    <div class="container inner flex flex-left">

        <div class="left">
            {!! $self->render('logo') !!}
        </div>

        <div class="right">
            <h1>{{ $model->name }}</h1>

            <div class="rating-and-review-count flex flex-middle flex-left">
                {!! $self->render('rating') !!}
                <div class="line"></div>
                {!! $self->render('reviews-count') !!}
            </div>

            {!! $self->render('contacts') !!}
            {!! $self->render('info') !!}
            {!! $self->render('links') !!}

            <div id="company-page-map"
                 class="map"
                 data-coords="{{ $self->ajaxData(array_reverse($model->getCoords())) }}"
                 data-address="{{ $model->address }}"
            ></div>
        </div>

    </div>
</div>