@extends('layouts.default')

@section('title', __('site.home-page.title'))

@section('content')

    <x-map-block/>
    <x-recommended-block/>
    <x-special-offers-block/>
    <x-exhibitions-block/>

@endsection
