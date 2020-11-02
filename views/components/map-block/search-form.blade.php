<form action="#"
      class="map-search-form"
      enctype="multipart/form-data"
      method="post"
      data-ajax="{{ $self->ajax('onSubmitSearch') }}"
>
    @csrf

    <div class="form-inner flex flex-nowrap flex-middle">

        <div class="form-group item-search">
            {{ Form::text('search', null, [
                'placeholder' => 'Поиск компании',
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