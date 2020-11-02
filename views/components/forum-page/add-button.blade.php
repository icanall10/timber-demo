<div class="add">
    @if (Auth::check())
        <a href="{{ url('forum/posts/add') }}"
           class="button small"
        >{{ __('site.forum-page.create-post') }}</a>
    @else
        <a href="{{ url('forum/posts/add') }}"
           class="button small"
           data-request="AuthModal::onModalLogin"
           data-request-data='@json(['return_url' => request()->url()])'
        >{{ __('site.forum-page.create-post') }}</a>
    @endif
</div>