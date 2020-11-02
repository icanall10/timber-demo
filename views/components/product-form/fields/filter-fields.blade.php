@php($model = $self->getModel())

@foreach($self->getFilterFields() as $field)

    @php($code = $field->getCode())

    @if ($field->getType() == \App\Classes\Filter::TYPE_BETWEEN)

        @if ($field->isMultipleInProduct())
            {!! $self->render('partials.between-fields', [
                'field' => $field,
                'items' => optional($model)->{$field->getRelationInProduct()}  ?: collect()
            ]) !!}
        @else
            <div class="form-group item-{{ Str::slug($code) }}">
                {{ Form::label($self->getFormId() . '-', $field->getName()) }}
                {{ Form::text($field->getCode(), $self->getFilterFieldValue($code), [
                    'id' => $self->getFormId() . '-' . Str::slug($code)
                ]) }}
            </div>
        @endif

    @endif

    @if ($field->getType() == \App\Classes\Filter::TYPE_SELECT)
        <div class="form-group item-{{ Str::slug($code) }}">
            {{ Form::label($self->getFormId() . '-', $field->getName()) }}
            {{ Form::select($field->getCode(), ['' => __('site.product-form.no-selected')] + $field->getOptions(), $self->getFilterFieldValue($code), [
                'id' => $self->getFormId() . '-' . Str::slug($code)
            ]) }}
        </div>
    @endif

@endforeach