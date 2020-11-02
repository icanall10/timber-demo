<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::text('name', null, [
                'placeholder' => __('site.register-form.name')
            ]) }}
        </div>

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-password">
            {{ Form::password('password', [
                'placeholder' => __('site.register-form.password')
            ]) }}
        </div>

        <div class="form-group item-password-confirmation">
            {{ Form::password('password_confirmation', [
                'placeholder' => __('site.register-form.repeat-password')
            ]) }}
        </div>


        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button(__('site.register-form.sing-up-do'), [
                'type' => 'submit'
            ]) }}

            <div class="link">
                <a href="#"
                   data-request="AuthModal::onModalChangeToLogin"
                   data-request-data
                >{{ __('site.register-form.sing-in-do') }}</a>
            </div>
        </div>


    </div>
</form>