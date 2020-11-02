@php($id = $self->getFormId() . '-' . Str::slug($field))

<div class="form-group item-{{ Str::slug($field) }}">
    {{ Form::label($id, $name) }}

    @if (!empty($help))
        <div class="help">{{ $help }}</div>
    @endif

    {{ Form::text($field, $self->getValue($field), [
        'id' => $id
    ]) }}
</div>