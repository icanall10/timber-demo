@extends('layouts.default')

@section('code', '404')
@section('title', 'Страница не найдена')
@section('h1', 'Страница не найдена')

@section('content')
    <div class="page">
        <div class="container">
            <p>Страница не существует.</p>
            <p>Возможно она была перемещена в другое место или адрес страницы содержит ошибку.</p>
        </div>
    </div>
@endsection