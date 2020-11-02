<form action="#"
      class="map-search-form"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmitSearch') }}"
>
    @csrf

    <div class="form-inner flex flex-nowrap flex-middle">

        <div class="form-group item-search">
            {{ Form::text('search', null, [
                'placeholder' => __('site.search-form.search-companies'),
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