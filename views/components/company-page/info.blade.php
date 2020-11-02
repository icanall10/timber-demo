@php($model = $self->getModel())

<div class="info">

    @if ($model->teaser)
        <div class="field">
            <div class="value">{{ $model->teaser }}</div>
        </div>
    @endif

    @if ($model->info_products)
        <div class="field">
            <div class="name">{{ __('site.company-page.products') }}</div>
            <div class="value">{{ $model->info_products }}</div>
        </div>
    @endif

    @if ($model->info_materials)
        <div class="field">
            <div class="name">{{ __('site.company-page.materials') }}</div>
            <div class="value">{{ $model->info_materials }}</div>
        </div>
    @endif

    @if ($model->info_equipments)
        <div class="field">
            <div class="name">{{ __('site.company-page.equipments') }}</div>
            <div class="value">{{ $model->info_equipments }}</div>
        </div>
    @endif

    @if ($model->info_performance)
        <div class="field">
            <div class="name">{{ __('site.company-page.performance') }}</div>
            <div class="value">{{ $model->info_performance }}</div>
        </div>
    @endif

    @if ($model->info_breeds)
        <div class="field">
            <div class="name">{{ __('site.company-page.breeds') }}</div>
            <div class="value">{{ $model->info_breeds }}</div>
        </div>
    @endif

    @if ($model->info_delivery)
        <div class="field">
            <div class="name">{{ __('site.company-page.delivery') }}</div>
            <div class="value">{{ $model->info_delivery }}</div>
        </div>
    @endif

</div>