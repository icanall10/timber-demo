@if ($self->isType('register'))
    Регистрация
@endif

@if ($self->isType('login'))
    Вход
@endif

@if ($self->isType('password'))
    Восстановление пароля
@endif