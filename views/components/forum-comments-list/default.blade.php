@php($items = $self->getItems())

<div class="forum-comments-list">

    @if ($items->count())
        <div class="items">
            @foreach($items as $item)
                <div data-forum-comments-list-item="{{ $item->id }}">
                    {!! $self->render('item', compact('item')) !!}
                </div>
            @endforeach
        </div>

        {!! pagination($items) !!}
    @endif

    @if (!$items->count())
        <p class="empty">{{ __('site.forum-comments-list.empty') }}</p>
    @endif

</div>
