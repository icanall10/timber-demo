@component('mail::message')

Для активации аккаунта перейдите по ссылке:

@component('mail::button', ['url' => $user->getActivateUrl()])
Активировать аккаунт
@endcomponent

@endcomponent
