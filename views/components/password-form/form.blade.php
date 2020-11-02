<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-ajax="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button('Восстановить пароль', [
                'type' => 'submit'
            ]) }}

            <div class="link">
                <a href="#"
                   data-ajax="AuthModal::onModalChangeToLogin"
                   data-ajax-data
                >Войти</a>
            </div>
        </div>


    </div>
</form>