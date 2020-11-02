<div class="form-group item-type radios-inline">
    @foreach($self->getTypeOptions() as $key => $name)
        <div class="form-group item-type-{{ $key }}">
            {{ Form::radio('type', $key, $self->getType() == $key, [
                'id' => $self->getFormId() . '-type-' . $key
            ]) }}
            {{ Form::label($self->getFormId() . '-type-' . $key, $name) }}
        </div>
    @endforeach
</div>