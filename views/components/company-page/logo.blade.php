@php($model = $self->getModel())

<div class="logo">
    @if ($model->logo)
        <img src="{{ thumb($model->logo, 'company-page-logo') }}" alt="">
    @endif
</div>