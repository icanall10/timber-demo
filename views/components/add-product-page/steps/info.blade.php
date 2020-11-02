<div class="info">

    {!! $self->render('partials.category') !!}
    {!! $self->render('partials.location') !!}

    <div class="box box-form flex">

        <div class="box-title">{{ __('site.add-product-page.fill-form') }}</div>

        <div class="form">
            <x-product-form
                    :action="$self->getAction()"
                    :model="$self->getModel()"
                    :city="$self->getCity()"
                    :category="$self->getCategory()"
            />
        </div>

    </div>

</div>