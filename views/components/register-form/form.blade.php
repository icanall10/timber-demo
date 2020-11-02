<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-ajax="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::text('name', null, [
                'placeholder' => 'Имя'
            ]) }}
        </div>

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

        <div class="form-group item-password-confirmation">
            {{ Form::password('password_confirmation', [
                'placeholder' => 'Пароль еще раз'
            ]) }}
        </div>


        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button('Зарегистрироваться', [
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