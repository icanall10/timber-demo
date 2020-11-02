@extends('layouts.default')

@section('styles')
    <link rel="stylesheet" href="{{ mix('css/quill.css') }}">
@endsection

@section('scripts')
    <script src="{{ mix('js/quill.js') }}"></script>
@endsection

@section('title', __('site.forum-post-edit-page.title'))
@section('h1', __('site.forum-post-edit-page.h1'))

@section('breadcrumb')
    <li>
        <a href="{{ url('forum') }}">{{ __('site.forum-page.breadcrumb') }}</a>
    </li>
    <li>{{ __('site.forum-post-edit-page.breadcrumb') }}</li>
@endsection

@section('content')
    {!! $self->render('page') !!}
@endsection