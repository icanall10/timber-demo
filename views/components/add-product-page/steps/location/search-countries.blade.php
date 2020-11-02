<form action="#"
      class="add-product-search-countries-from"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmitSearchCountries') }}"
>
    @csrf

    {{ Form::hidden('action', $self->getAction()) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    {{ Form::hidden('category', optional($self->getCategory())->id) }}

    <div class="form-inner flex flex-left flex-middle flex-nowrap">
        <div class="form-group item-search">
            {{ Form::text('search_country', $self->getSearchCountry(), [
                'placeholder' => __('site.add-product-page.search-countries-placeholder'),
                'data-track-input' => 400,
                'data-request' => $self->ajax('onSubmitSearchCountries'),
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