@extends('layouts.default')

@section('title', __('site.contacts-page.title'))
@section('h1', __('site.contacts-page.h1'))

@section('breadcrumb')
    <li>{{ __('site.contacts-page.breadcrumb') }}</li>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection
