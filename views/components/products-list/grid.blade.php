@php($items = $self->getItems())

<div class="grid">
    @foreach($items as $item)
        {!! $self->render('item.grid', ['item' => $item]) !!}
    @endforeach
</div>