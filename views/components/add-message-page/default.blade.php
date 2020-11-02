@extends('layouts.default')

@section('title', __('site.add-message-page.title', ['name' => $self->getUser()->name]))
@section('h1',  __('site.add-message-page.title', ['name' => $self->getUser()->name]))

@section('breadcrumb')
    <li>{{ __('site.add-message-page.breadcrumb') }}</li>
@endsection

@section('bodyClass', 'small-page')

@section('content')
    {!! $self->render('page') !!}
@endsection
