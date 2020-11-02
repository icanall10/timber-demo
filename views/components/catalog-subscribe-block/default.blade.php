<div class="catalog-subscribe-block block flex flex-nowrap">
    <div class="info">
        <div class="name">{{ __('site.catalog-subscribe-block.question') }}</div>
        <div class="text">{{ __('site.catalog-subscribe-block.text') }}</div>
    </div>
    <div class="form">
        <x-catalog-subscribe-form :filters="$self->getFilters()"/>
    </div>
</div>