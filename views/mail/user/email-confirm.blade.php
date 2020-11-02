@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>Для подтверждения электронной почты перейдите по ссылке:</p>

    <p>
        <a href="{{ $url }}" class="button">Подтвердить e-mail</a>
    </p>
@endsection