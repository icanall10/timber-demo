@if ($user = $item->getUser())
    <div class="info">
        <div class="item">
            {{ __('site.forum-comments-list.registered') }}: {{ $user->created_at->format('d.m.Y') }}
        </div>
        <div class="item">
            {{ __('site.forum-comments-list.messages') }}: {{ $user->getCommentsCount() }}
        </div>
    </div>

    <div class="links flex flex-left">
        @if ($user->id != Auth::id())
            @if (Auth::check())
                <a href="{{ $user->getAddMessagePageUrl() }}"
                   class="button extra-small"
                >{{ __('site.forum-comments-list.send-message') }}</a>
            @else
                <a href="#"
                   class="button extra-small"
                   data-request="AuthModal::onModalLogin"
                   data-request-data='@json(['return_url' => $user->getAddMessagePageUrl()])'
                >{{ __('site.forum-comments-list.send-message') }}</a>
            @endif
        @endif
    </div>
@endif