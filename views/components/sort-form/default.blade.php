<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">
        <div class="form-group item-sort">
            {{ Form::label($self->getFormId() . '-sort', __('site.sort-form.label') . ':') }}
            {{ Form::select('sort', $self->getSortOptions(), $self->getSort(), [
                'id' => $self->getFormId() . '-sort',
                'data-request'
            ]) }}
        </div>
    </div>

</form>