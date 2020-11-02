@php($id = $self->getFormId() . '-' . Str::slug($field))

<div class="form-group item-{{ Str::slug($field) }}">
    {{ Form::checkbox($field, 1, $self->getValue($field), [
        'id' => $id
    ]) }}

    {{ Form::label($id, $name) }}

    @if (!empty($help))
        <div class="help">{{ $help }}</div>
    @endif
</div>