<div class="user-page-section-favorites">

    <div class="section-header">
        <h1>{{ __('site.user-page.favorites-h1') }}</h1>
    </div>

    <x-products-list :items="$self->getFavoriteProducts()" :columns="3" />

</div>