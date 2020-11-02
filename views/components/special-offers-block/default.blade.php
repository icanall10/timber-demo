@if ($self->getProducts()->count())
    <div class="special-offers-block block">
        <div class="container">

            <div class="block-title">{{ __('site.special-offers-block.title') }}</div>

            <x-products-list :items="$self->getProducts()"/>

        </div>
    </div>
@endif