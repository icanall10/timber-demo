<div class="cities">
    <div class="title">{{ __('site.add-product-page.city') }}</div>

    <div class="search">
        {!! $self->render('steps.location.search-cities') !!}
    </div>

    <div data-add-product-page-cities-list>
        {!! $self->render('steps.location.cities-list') !!}
    </div>

</div>