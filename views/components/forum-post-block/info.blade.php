@if ($user = $self->getUser())
    <div class="info">
        <div class="item">
            {{ __('site.forum-post-block.registered') }}: {{ $user->created_at->format('d.m.Y') }}
        </div>
        <div class="item">
            {{ __('site.forum-post-block.messages') }}: {{ $user->getCommentsCount() }}
        </div>
    </div>

    <div class="links flex flex-left">
        @if ($user->id != Auth::id())
            @if (Auth::check())
                <a href="{{ $user->getAddMessagePageUrl() }}"
                   class="button extra-small"
                >{{ __('site.forum-post-block.send-message') }}</a>
            @else
                <a href="#"
                   class="button extra-small"
                   data-request="AuthModal::onModalLogin"
                   data-request-data='@json(['return_url' => request()->url()])'
                >{{ __('site.forum-post-block.send-message') }}</a>
            @endif
        @endif
    </div>
@endif