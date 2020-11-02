@extends('layouts.default')

@section('title', 'Главная страница')

@section('content')

    <x-map-block/>
    <x-recommended-block/>
    <x-exhibitions-block/>

@endsection
