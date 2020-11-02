@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>
        Ваше объявление "{{ $name }}" добавлено на сайт, но пока не опубликовано.
    </p>

    <p>Для публикации объявления перейдите по ссылке:</p>

    <p>
        <a href="{{ $url }}" class="button">Опубликовать объявление</a>
    </p>
@endsection