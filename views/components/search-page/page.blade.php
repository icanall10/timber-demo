<div class="catalog-page page">
    <div class="container">

        <div data-catalog-products>
            {!! $self->render('products', ['filters' => $self->getFilters()]) !!}
        </div>

    </div>
</div>