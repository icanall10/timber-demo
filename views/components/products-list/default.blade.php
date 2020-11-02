@php($items = $self->getItems())

<div class="products-list">
    @if (!$items->count())
        <p>Нет объявлений</p>
    @endif

    @if ($items->count())
        @if ($self->getMode() == 'grid')
            {!! $self->render('grid') !!}
        @endif

        @if ($self->getMode() == 'list')
            {!! $self->render('list') !!}
        @endif
    @endif
</div>

