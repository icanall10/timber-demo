@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>Для изменения пароля перейдите по ссылке:</p>

    <p>
        <a href="{{ $url }}" class="button">Изменить пароль</a>
    </p>
@endsection