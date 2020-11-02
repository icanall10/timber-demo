@php($user = $self->getUser())

<div class="user flex flex-middle">

    @if ($user)
        <a href="#" class="link">
            {!! icon('user') !!}
            {{ $user->name }}
        </a>

        <a href="{{ url('user/logout') }}" class="link">
            Выход
        </a>
    @else
        <a href="#"
           class="link"
           data-ajax="AuthModal::onModalLogin"
           data-ajax-data="{!! json([
            'type' => 'register'
       ]) !!}"
        >
            {!! icon('user') !!}
            Войти
        </a>
    @endif

</div>