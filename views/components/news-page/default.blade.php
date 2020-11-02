@extends('layouts.default')

@section('title', __('site.news-page.title'))
@section('h1', __('site.news-page.h1'))

@section('breadcrumb')
    <li>{{ __('site.news-page.breadcrumb') }}</li>
@endsection

@section('content')

    {!! $self->render('page') !!}

@endsection
