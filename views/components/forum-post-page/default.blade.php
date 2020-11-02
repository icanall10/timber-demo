@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ mix('css/quill.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('js/quill.js') }}"></script>
@endsection

@section('title', $self->getModel()->name)
@section('h1', $self->getModel()->name)

@section('breadcrumb')
    {!! $self->render('breadcrumb') !!}
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection