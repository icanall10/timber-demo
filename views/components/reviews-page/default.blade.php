@extends('layouts.default')

@section('title', __('site.reviews-page.title', ['name' => $self->getCompany()->name]))
@section('h1', __('site.reviews-page.h1', ['name' => $self->getCompany()->name]))

@section('breadcrumb')
    {!! $self->render('breadcrumb') !!}
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection