@extends('layouts.default')

@section('title', $self->getModel()->name)

@section('breadcrumb')
    <li><a href="{{ $self->getModel()->getPageUrl() }}">Личный кабинет</a></li>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection