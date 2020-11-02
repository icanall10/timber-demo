<div class="countries">
    <div class="title">{{ __('site.add-product-page.country') }}</div>

    <div class="search">
        {!! $self->render('steps.location.search-countries') !!}
    </div>

    <div data-add-product-page-countries-list>
        {!! $self->render('steps.location.countries-list') !!}
    </div>
</div>