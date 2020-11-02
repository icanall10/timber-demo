<div class="location">

    {!! $self->render('partials.category') !!}

    <div class="box flex">
        <div class="box-title">{{ __('site.add-product-page.location') }}</div>
    </div>

    <div class="box box-location flex flex-left flex-nowrap">

        <div class="column">
            <div data-add-product-page-countries>
                {!! $self->render('steps.location.countries') !!}
            </div>
        </div>

        <div class="column">
            <div data-add-product-page-regions>
                @if ($self->getRegion())
                    {!! $self->render('steps.location.regions') !!}
                @endif
            </div>
        </div>

        <div class="column">
            <div data-add-product-page-cities>
                @if ($self->getCity())
                    {!! $self->render('steps.location.cities') !!}
                @endif
            </div>
        </div>

    </div>

</div>