@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>Для активации подписки на новые объявления перейдите по ссылке:</p>

    <p>
        <a href="{{ $url }}" class="button">Активировать подписку</a>
    </p>
@endsection