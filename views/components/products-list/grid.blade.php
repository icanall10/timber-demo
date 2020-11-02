@php($items = $self->getItems())

<div class="grid {{ $self->getColumns() ? ('columns-' . $self->getColumns()) : '' }}">
    @foreach($items as $item)
        {!! $self->render('item.grid', ['item' => $item]) !!}
    @endforeach
</div>