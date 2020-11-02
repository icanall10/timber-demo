@php($code = $field->getCode())

<div class="between-field flex flex-left flex-middle" data-product-form-between-field="{{ $code }}-{{ $key }}">

    <div class="form-group item-between-field-from">
        {{ Form::text("{$code}[{$key}][from]", isset($from) ? $from : null, [
            'placeholder' => 'от'
        ]) }}
    </div>

    <div class="sep"></div>

    <div class="form-group item-between-field-to">
        {{ Form::text("{$code}[{$key}][to]", isset($to) ? $to : null, [
            'placeholder' => 'до'
        ]) }}
    </div>

    @if (!empty($canDelete))
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteBetweenField') }}"
               data-request-data="{{ $self->ajaxData([
                    'code' => $code,
                    'key' => $key
               ]) }}"
            >Удалить</a>
        </div>
    @endif

</div>