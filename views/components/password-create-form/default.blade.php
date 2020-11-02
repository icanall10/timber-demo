<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-ajax="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('id', $self->getId()) }}
    {{ Form::hidden('code', $self->getCode()) }}

    <div class="form-inner">

        <div class="form-group item-password">
            {{ Form::password('password', [
                'placeholder' => 'Новый пароль'
            ]) }}
        </div>

        <div class="form-group item-password">
            {{ Form::password('password_confirmation', [
                'placeholder' => 'Повторите новый пароль'
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button('Сохранить пароль', [
                'type' => 'submit'
            ]) }}
        </div>


    </div>
</form>