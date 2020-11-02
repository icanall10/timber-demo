@extends('layouts.default')

@section('title', __('site.exhibition-page.title'))
@section('h1', __('site.exhibition-page.h1'))

@section('content')

    {!! $self->render('page') !!}

@endsection
