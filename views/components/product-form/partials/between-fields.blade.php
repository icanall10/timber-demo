@php($model = $self->getModel())
@php($code = $field->getCode())

<div class="between-fields form-group item-{{ Str::slug($code) }}">
    <label for="#">{{ $field->getName() }}</label>

    <div data-product-form-between-fields="{{ $code }}">
        @foreach($items as $key => $item)
            {!! $self->render('partials.between-field', [
                'field' => $field,
                'key' => $key,
                'from' => $item->from,
                'to' => $item->to,
                'canDelete' => ($key > 0)
            ]) !!}
        @endforeach

        @if (!$items->count())
            {!! $self->render('partials.between-field', [
                'field' => $field,
                'key' => 0
            ]) !!}
        @endif
    </div>

    <div class="add-more">
        <button href="#"
                class="extra-small"
                data-request="{{ $self->ajax('onAddMoreBetweenField') }}"
                data-request-data="{{ $self->ajaxData([
                'code' =>  $code
           ]) }}"
        >
            + Добавить еще
        </button>
    </div>
</div>