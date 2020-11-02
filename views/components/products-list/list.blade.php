@php($items = $self->getItems())

<div class="list">
    @foreach($items as $item)
        {!! $self->render('item.list', ['item' => $item]) !!}
    @endforeach
</div>