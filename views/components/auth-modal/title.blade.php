@if ($self->isType('register'))
    {{ __('site.auth-modal.register-title') }}
@endif

@if ($self->isType('login'))
    {{ __('site.auth-modal.login-title') }}
@endif

@if ($self->isType('password'))
    {{ __('site.auth-modal.password-title') }}
@endif