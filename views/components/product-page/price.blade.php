@php($model = $self->getModel())

<div class="price flex flex-left flex-middle">
    <div class="value">{{ number_format($model->getPrice(), 0, ', ', ' ') }}</div>
    <div class="currency">
        {!! icon('rub') !!}
    </div>
    <div class="unit">за {{ $model->getUnitForPrice() ?: 'м³' }}</div>
</div>