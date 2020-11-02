@php($model = $self->getModel())

<div class="date-and-location flex flex-left">

    <div class="date">
        {{ $model->created_at->formatLocalized('%d %B %Y г. %H:%M') }}
    </div>

    <div class="sep">|</div>

    <div class="views">
        {{ __('site.product-page.contact.views') }}: {{ $model->getViewsCount() }}
    </div>

    <div class="sep">|</div>

    <div class="location">
        @if ($model->city)
            {{ $model->city->name }}

            @if ($model->city->region)
                , {{ $model->city->region->name }}
            @endif

            @if ($model->city->country)
                , {{ $model->city->country->name }}
            @endif
        @endif
    </div>

</div>