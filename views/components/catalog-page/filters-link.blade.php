<a href="#"
   class="filters-link"
   data-request="filtersForm::onModal"
   data-request-data='@json(['url' => $self->getService()->getUrl()])'
>
    <span class="icon">
        {!! icon('filters') !!}
    </span>
    <span class="name">{{ __('site.catalog-page.filters-link') }}</span>
</a>