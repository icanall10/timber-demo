<form action="#"
      class="add-product-search-regions-from"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmitSearchCities') }}"
>
    @csrf

    {{ Form::hidden('action', $self->getAction()) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    {{ Form::hidden('category', optional($self->getCategory())->id) }}
    {{ Form::hidden('country', optional($self->getCountry())->id) }}
    {{ Form::hidden('region', optional($self->getRegion())->id) }}

    <div class="form-inner flex flex-left flex-middle flex-nowrap">
        <div class="form-group item-search">
            {{ Form::text('search_city', $self->getSearchCity(), [
                'placeholder' => __('site.add-product-page.search-cities-placeholder'),
                'data-track-input' => 400,
                'data-request' => $self->ajax('onSubmitSearchCities'),
                'autocomplete' => 'off'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit">
                {!! icon('search') !!}
            </button>
        </div>
    </div>
</form>