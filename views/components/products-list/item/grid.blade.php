@php($image = $item->getOnlyImages()->first())

<div class="products-grid-item {{ $item->isHighlighted() ? 'highlighted' : '' }}"
     data-product-grid-item="{{ $item->id }}"
>

    <div class="img">
        <a href="{{ $item->getPageUrl() }}">
            @if ($image)
                <img src="{{ $image->thumb('products-grid') }}" alt="{{ $item->name }}">
            @else
                <img src="{{ thumb('no-image.png', 'products-grid') }}" alt="{{ $item->name }}">
            @endif
        </a>
    </div>
    <div class="name">
        <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
    </div>

    <div class="fields">
        @if ($item->wood)
            <div class="field">{{ $item->wood->name }}</div>
        @endif

        @if ($item->state)
            <div class="field">{{ $item->state->name }}</div>
        @endif
    </div>

    <div class="fields">
        @if ($diameter = $item->diameters->first())
            <div class="field">
                {{ __('site.products-list.diameter') }}
                : {{ average($diameter->from, $diameter->to) }} {{ $item->getUnitForSize() }}
            </div>
        @endif

        @if ($length = $item->lengths->first())
            <div class="field">
                {{ __('site.products-list.length') }}
                : {{ average($length->from, $length->to) }} {{ $item->getUnitForSize() }}
            </div>
        @endif
    </div>

    <div class="price flex flex-left flex-center">
        <div class="value">{{ number_format($item->price, 0, ', ', ' ') }}</div>
        <div class="currency">
            {!! icon('rub') !!}
        </div>
        <div class="suffix">{{ __('site.products-list.per-m3', ['unit' => $item->getUnitForPriceName()]) }}</div>
    </div>

    @if ($item->city)
        <div class="city">{{ $item->city->name }}</div>
    @endif

    @if ($item->canEdit())
        <div class="edit flex flex-left">
            <a href="{{ $item->getEditPageUrl() }}"
               class="button extra-small"
            >{{ __('site.product-list.edit') }}</a>

            <a href="{{ $item->getEditPageUrl() }}"
               class="button extra-small red"
               data-request="{{ $self->ajax('onConfirmDelete') }}"
               data-request-data='@json(['product_id' => $item->id])'
            >{{ __('site.product-list.delete') }}</a>
        </div>
    @endif

</div>