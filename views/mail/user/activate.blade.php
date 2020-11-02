@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    @if ($email and $password)
        <p>Для Вас создан аккаунт.</p>

        <p>
            E-mail: <strong><a href="mailto:{{ $email }}">{{ $email }}</a></strong> <br>
            Пароль: <strong>{{ $password }}</strong> <br>
        </p>
    @endif

    <p>Для активации аккаунта перейдите по ссылке:</p>

    <p>
        <a href="{{ $url }}" class="button">Активировать аккаунт</a>
    </p>
@endsection