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

        <div class="form-group item-password">
            {{ Form::password('password', [
                'placeholder' => 'Пароль'
            ]) }}
        </div>

        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button('Войти', [
                'type' => 'submit'
            ]) }}

            <div class="link">
                <a href="#" data-ajax="AuthModal::onModalChangeToRegister">Зарегистрироваться</a>
            </div>
            <div class="link">
                <a href="#" data-ajax="AuthModal::onModalChangeToPassword">Я забыл пароль</a>
            </div>
        </div>


    </div>
</form>