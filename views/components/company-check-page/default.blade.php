@extends('layouts.default')

@section('title', '')
@section('h1', '')

@section('bodyClass', 'grey')

@section('scripts')
    <script src="{{ mix('js/chart.js') }}"></script>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection