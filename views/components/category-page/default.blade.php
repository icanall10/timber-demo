@extends('layouts.default')

@section('title', $self->getModel()->name)

@section('before')
    {!! component('catalogPage')->render('before', ['title' => $self->getModel()->name]) !!}
@endsection

@section('content')
    {!! $self->render('page') !!}

    <x-catalog-subscribe-block :filters="$self->getFilters()"/>
@endsection

@section('right')
    <x-filters-block/>
@endsection