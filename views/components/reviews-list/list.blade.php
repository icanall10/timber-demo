@php($items = $self->getItems())

<div class="reviews-list">

    @if ($items->count())
        <div class="items">
            @foreach($items as $item)
                <div data-reviews-list-item="{{ $item->id }}">
                    {!! $self->render('item', compact('item')) !!}
                </div>
            @endforeach
        </div>
    @endif

    @if (!$items->count())
        <p>{{ __('site.reviews-list.empty') }}</p>
    @endif

</div>
