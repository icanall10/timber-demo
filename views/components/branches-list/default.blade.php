@php($items = $self->getItems())

<div class="branches-list">

    @if ($items->count())
        <div class="items">
            @foreach($items as $item)
                {!! $self->render('item', compact('item')) !!}
            @endforeach
        </div>

        {!! pagination($items) !!}
    @endif

    @if (!$items->count())
        <p class="empty">{{ __('site.branches-list.empty') }}</p>
    @endif

</div>