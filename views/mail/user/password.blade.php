@component('mail::message')

Для изменения пароля перейдите по ссылке:

@component('mail::button', ['url' => $user->getPasswordCreateUrl()])
Изменить пароль
@endcomponent

@endcomponent
