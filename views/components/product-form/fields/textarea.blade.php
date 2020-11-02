<div class="form-group item-{{ Str::slug($field) }}">
    {{ Form::label($self->getFormId() . '-', $name) }}

    @if (!empty($help))
        <div class="help">{{ $help }}</div>
    @endif

    {{ Form::textarea($field, $self->getValue($field), [
        'id' => $self->getFormId() . '-' . Str::slug($field),
        'rows' => !empty($rows) ? (int)$rows : 10
    ]) }}
</div>