<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('filters', json_encode($self->getFilters()->getData())) }}
    {{ Form::hidden('path', request()->path()) }}

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::text('name', null, [
                'placeholder' => __('site.catalog-subscribe-form.name')
            ]) }}
        </div>

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-actions">
            <button type="submit">
                {!! icon('letter') !!}
                {{ __('site.catalog-subscribe-form.button') }}
            </button>
        </div>
    </div>
</form>