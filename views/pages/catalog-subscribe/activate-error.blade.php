@extends('layouts.default')

@section('title', 'Ошибка активации')
@section('h1', 'Ошибка активации')

@section('content')
    <div class="page">
        <div class="container">
            <p>Возможно, данная ссылка активации подписки уже была использована ранее или содержит ошибку.</p>
            <p>Каждая ссылка активации уникальна и может быть использована только один раз.</p>
        </div>
    </div>
@endsection