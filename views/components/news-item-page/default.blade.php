@extends('layouts.default')

@section('title',  $self->getModel()->name)
@section('h1',  $self->getModel()->name)

@section('breadcrumb')
    <li><a href="{{ url('news') }}">{{ __('site.news-page.breadcrumb') }}</a></li>
@endsection

@section('bodyClass', 'small-page')

@section('content')
    {!! $self->render('page') !!}
@endsection

@section('after')
    <x-other-news-block :model="$self->getModel()"/>
@endsection
