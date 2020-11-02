@php($model = $self->getModel())

{!! $self->render('breadcrumb') !!}

<div class="product-page page"
     data-product-page
     data-request="{{ $self->ajax('onView') }}"
     data-request-data="{{ $self->ajaxData(['model_id' => $model->id]) }}"
>
    <div class="container inner flex flex-nowrap">

        <div class="left">

            <div class="product-page-inner">
                <div class="h1-and-favorite flex flex-nowrap">
                    {!! $self->render('h1') !!}
                    {!! $self->render('favorite-link') !!}
                </div>

                {!! $self->render('date-and-location') !!}
                {!! $self->render('slider') !!}

                <div class="only-tablet-or-mobile">
                    <div class="info">
                        {!! $self->render('price') !!}
                        {!! $self->render('fields') !!}
                        {!! $self->render('company') !!}

                        @if ($self->isOtherUser())
                            {!! $self->render('contact') !!}
                        @endif
                    </div>
                </div>

                {!! $self->render('text') !!}
                {!! $self->render('video') !!}
            </div>

            {!! $self->render('similar') !!}
        </div>

        <div class="right">
            <div class="product-page-inner">
                <div class="info">
                    {!! $self->render('price') !!}
                    {!! $self->render('fields') !!}
                    {!! $self->render('company') !!}

                    @if ($self->isOtherUser())
                        {!! $self->render('contact') !!}
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>