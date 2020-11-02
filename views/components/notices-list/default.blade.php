@php($items = $self->getItems())

<div class="notices-list">

    @if ($items->count())
        <div class="items">
            @foreach($items as $item)
                {!! $self->render('item', compact('item')) !!}
            @endforeach
        </div>

        {!! pagination($items) !!}
    @endif

    @if (!$items->count())
        <p class="empty">{{ __('site.notices-list.empty') }}</p>
    @endif

</div>