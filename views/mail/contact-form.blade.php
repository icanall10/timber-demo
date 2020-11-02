@extends('mail.layouts.default')

@section('content')
    <p>Здравствуйте.</p>

    <p>Сообщение из формы обратной связи:</p>

    <p>
        Имя: {{ $name }} <br>
        E-mail: {{ $email }} <br>
        Сообщение: {{ $text }}
    </p>
@endsection