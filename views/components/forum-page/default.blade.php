@extends('layouts.default')

@section('title',  $self->getTitle())

@section('breadcrumb')
    {!! $self->render('breadcrumb') !!}
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection
