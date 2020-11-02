@php($model = $self->getModel())

<div class="fields">

    @foreach($self->getFields() as $item)
        {!! $self->render('field', $item) !!}
    @endforeach

</div>