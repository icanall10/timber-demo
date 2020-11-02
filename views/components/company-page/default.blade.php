@extends('layouts.default')

@section('title',  $self->getModel()->name)

@section('breadcrumb')
    <li>{{ __('site.company-page.companies') }}</li>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection
