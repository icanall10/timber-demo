@extends('layouts.default')

@section('title', $self->isEdit() ?  __('site.edit-product-page.title') : __('site.add-product-page.title'))
@section('h1', $self->isEdit() ? __('site.edit-product-page.h1') : __('site.add-product-page.h1'))

@section('scripts')
    <script src="{{ mix('js/masonry.js') }}"></script>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection
