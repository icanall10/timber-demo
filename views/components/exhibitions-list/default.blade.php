@php($items = $self->getItems())

<div class="exhibitions-list">

    @if ($items->count())
        <div class="items">
            @foreach($items as $item)
                <div class="exhibitions-list-item flex flex-nowrap">
                    <div class="info flex flex-column">
                        <div class="date-and-name">
                            {!! $self->render('date', compact('item')) !!}
                            {!! $self->render('name', compact('item')) !!}
                        </div>

                        @if ($item->city)
                            {!! $self->render('location', compact('item')) !!}
                        @endif
                    </div>

                    <div class="img">
                        {!! $self->render('image', compact('item')) !!}
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if (!$items->count())
        <p class="empty">Нет выставок</p>
    @endif

    {!! pagination($items) !!}

</div>