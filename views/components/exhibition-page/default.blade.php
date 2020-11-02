@extends('layouts.default')

@section('title',  $self->getModel()->name)
@section('h1',  $self->getModel()->name)

@section('breadcrumb')
    <li><a href="{{ url('exhibition') }}">{{ __('site.news-page.breadcrumb') }}</a></li>
@endsection

@section('bodyClass', 'small-page')

@section('content')
    {!! $self->render('page') !!}
@endsection
