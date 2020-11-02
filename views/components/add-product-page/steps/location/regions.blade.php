<div class="regions">
    <div class="title">{{ __('site.add-product-page.region') }}</div>

    <div class="search">
        {!! $self->render('steps.location.search-regions') !!}
    </div>

    <div data-add-product-page-regions-list>
        {!! $self->render('steps.location.regions-list') !!}
    </div>

</div>