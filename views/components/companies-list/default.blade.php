@php($items = $self->getItems())

<div class="companies-list">
    @foreach($items as $item)
        {!! $self->render('item', compact('item')) !!}
    @endforeach

    {!! pagination($items) !!}
</div>