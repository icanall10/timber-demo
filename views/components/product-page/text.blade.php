@php($model = $self->getModel())

@if ($text = trim($model->text))
    <div class="description">
        <div class="box-name">{{ __('site.product-page.contact.text-title') }}</div>
        <div class="value">{{ $text }}</div>
    </div>
@endif