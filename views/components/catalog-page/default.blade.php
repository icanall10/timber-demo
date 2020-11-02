@extends('layouts.default')

@section('title', __('site.catalog-page.title'))

@section('before')
    {!! $self->render('before') !!}
@endsection

@section('content')
    {!! $self->render('page') !!}

    <x-catalog-subscribe-block :filters="$self->getFilters()"/>
@endsection

@section('right')
    <x-filters-block/>
@endsection