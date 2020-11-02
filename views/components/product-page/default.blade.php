@extends('layouts.default')

@section('title',  $self->getModel()->name)

@section('content')

    {!! $self->render('page') !!}

@endsection
