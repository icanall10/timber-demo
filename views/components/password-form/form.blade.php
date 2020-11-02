<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">

        <div class="form-group item-email">
            {{ Form::text('email', null, [
                'placeholder' => 'E-mail'
            ]) }}
        </div>

        <div class="form-group item-actions flex flex-middle flex-left">
            {{ Form::button(__('site.password-form.forgot-password'), [
                'type' => 'submit'
            ]) }}

            <div class="link">
                <a href="#"
                   data-request="AuthModal::onModalChangeToLogin"
                   data-request-data
                >{{ __('site.password-form.sing-in-do') }}</a>
            </div>
        </div>


    </div>
</form>