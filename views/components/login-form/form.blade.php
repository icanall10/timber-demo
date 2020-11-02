<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('return_url', $self->getReturnUrl()) }}

    <div class="form-inner">

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-password">
            {{ Form::password('password', [
                'placeholder' => __('site.login-form.password')
            ]) }}
        </div>

        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button(__('site.login-form.sing-in-do'), [
                'type' => 'submit'
            ]) }}

            <div class="link">
                <a href="#"
                   data-request="AuthModal::onModalChangeToRegister"
                   data-request-data="{{ $self->ajaxData() }}"
                >{{ __('site.login-form.sing-up-do') }}</a>
            </div>
            <div class="link">
                <a href="#"
                   data-request="AuthModal::onModalChangeToPassword"
                   data-request-data="{{ $self->ajaxData() }}"
                >
                    {{ __('site.login-form.forgot-password') }}
                </a>
            </div>
        </div>


    </div>
</form>