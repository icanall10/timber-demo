@php($message = $item->messages->first())

@if ($message)
    <div class="branches-list-item flex flex-nowrap">

        <div class="info">
            <div class="header flex">
                <div class="name">{{ $message->user->name }}</div>
                <div class="date">{{ $message->user->created_at->format('d.m.Y H:i') }}</div>
            </div>

            <div class="teaser">{!! helpers()->autoLink($message->getTeaser(), true) !!}</div>

            @if ($item->new_messages_count > 1)
                <div class="new-messages-count">
                    Еще {{ $item->new_messages_count }}
                    {{ plural_form(
                        $item->new_messages_count,
                        __('site.branches-list.messages.form1'),
                        __('site.branches-list.messages.form2'),
                        __('site.branches-list.messages.form3')
                    ) }}
                </div>
            @endif

            <div class="read flex">
                <a href="{{ $item->getPageUrl() }}" class="button extra-small">{{ __('site.branches-list.more') }}</a>
            </div>
        </div>

    </div>
@endif