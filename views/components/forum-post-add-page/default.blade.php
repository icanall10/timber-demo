@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ mix('css/quill.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('js/quill.js') }}"></script>
@endsection

@section('title', __('site.forum-post-add-page.h1'))
@section('h1', __('site.forum-post-add-page.title'))

@section('content')
    {!! $self->render('page') !!}
@endsection