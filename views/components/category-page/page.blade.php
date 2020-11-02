<div class="catalog-page page">
    <div class="container">

        <div data-catalog-products>
            {!! component('catalogPage')->render('products', ['filters' => $self->getFilters()]) !!}
        </div>

    </div>
</div>