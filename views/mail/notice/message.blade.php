@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>Вы получили новое сообщение.</p>

    <p>Отправитель: {{ $sender }}</p>

    <p>Текст сообщения:</p>

    <blockquote>
        <p class="pre-wrap">{{ $text }}</p>
    </blockquote>

    <p>
        <a href="{{ $url }}" class="button">Открыть всю переписку</a>
    </p>
@endsection