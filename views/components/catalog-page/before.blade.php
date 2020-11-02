<div class="catalog-page-header">
    <div class="inner flex flex-bottom container">
        <div class="h1-and-count">
            <h1>{{ isset($title) ? $title : __('site.catalog-page.h1') }}</h1>
            <div class="count">
                    <span data-catalog-products-count>
                        {!! $self->render('count') !!}
                    </span>
            </div>
        </div>
        <div class="sort-and-view-mode flex flex-middle">
            <div class="sort">
                <x-sort-form/>
            </div>
            <div class="view-mode-and-filters flex flex-middle flex-nowrap">
                <div class="view-mode">
                    <x-products-list-view-mode/>
                </div>

                <div class="only-tablet-or-mobile filters-link-wrapper">
                    <div data-filters-link>
                        {!! $self->render('filters-link') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>