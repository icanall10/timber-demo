<div class="notices-list-item {{ $item->isViewed() ? 'viewed' : '' }}">

    {!! $self->render("types.{$item->type}", compact('item')) !!}

</div>