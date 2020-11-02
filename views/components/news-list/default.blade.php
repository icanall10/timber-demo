@php($items = $self->getItems())

<div class="news-list">

    @if ($items->count())
        <div class="grid">
            @foreach($items as $item)
                {!! $self->render('item', compact('item')) !!}
            @endforeach
        </div>

        {!! pagination($items) !!}
    @endif

    @if (!$items->count())
        <div class="empty">{{ __('site.news-list.empty') }}</div>
    @endif

</div>