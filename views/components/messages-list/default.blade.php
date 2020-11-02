@php($items = $self->getItems())

<div class="messages-list">

    <div data-messages-list-load-more>
        {!! $self->render('load-more') !!}
    </div>

    @if ($items->count())
        <div class="items" data-messages-list>
            @foreach($items as $item)
                {!! $self->render('item', compact('item')) !!}
            @endforeach
        </div>
    @endif

    @if (!$items->count())
        <p class="empty">{{ __('site.messages-list.empty') }}</p>
    @endif

</div>