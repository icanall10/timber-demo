<div class="box flex">
    <div class="box-title">{{ __('site.add-product-page.location') }}</div>

    <div class="box-value">
        <a href="{{ $self->getStepUrl('location', $self->getAjaxData()) }}">
            @if (!$self->getCity())
                Не выбрано
            @endif

            @if ($country = $self->getCountry())
                {{ $country->name }},
            @endif

            @if ($region = $self->getRegion())
                {{ $region->name }},
            @endif

            @if ($city = $self->getCity())
                {{ $city->name }}
            @endif
        </a>
    </div>
</div>