@extends('layouts.default')

@section('title', __('site.order-finished-page.title'))
@section('h1', __('site.order-finished-page.h1'))

@section('breadcrumb')
    <li>{{ __('site.order-finished-page.breadcrumb') }}</li>
@endsection

@section('content')

    {!! $self->render('page') !!}

@endsection
