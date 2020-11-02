<form action="#"
      class="add-product-search-regions-from"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmitSearchRegions') }}"
>
    @csrf

    {{ Form::hidden('action', $self->getAction()) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    {{ Form::hidden('category', optional($self->getCategory())->id) }}
    {{ Form::hidden('country', optional($self->getCountry())->id) }}

    <div class="form-inner flex flex-left flex-middle flex-nowrap">
        <div class="form-group item-search">
            {{ Form::text('search_region', $self->getSearchRegion(), [
                'placeholder' => __('site.add-product-page.search-regions-placeholder'),
                'data-track-input' => 400,
                'data-request' => $self->ajax('onSubmitSearchRegions'),
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