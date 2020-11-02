@if ($self->isType('register'))
    {!! $self->render('register') !!}
@endif

@if ($self->isType('login'))
    {!! $self->render('login') !!}
@endif

@if ($self->isType('password'))
    {!! $self->render('password') !!}
@endif