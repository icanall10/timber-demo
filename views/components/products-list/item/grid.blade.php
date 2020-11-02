<?php $image = $item->images->first() ?>

<div class="products-grid-item">
    <div class="img">
        <a href="{{ $item->getPageUrl() }}">
            @if ($image)
                <img src="{{ $image->thumb('products-grid') }}" alt="{{ $item->name }}">
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
        @if ($item->diameter)
            <div class="field">диаметр: {{ $item->diameter }} см</div>
        @endif

        @if ($item->length)
            <div class="field">длина: {{ $item->length }} м</div>
        @endif
    </div>

    <div class="price flex flex-left flex-center">
        <div class="value">{{ number_format($item->price, 0, ', ', ' ') }}</div>
        <div class="currency">
            {!! icon('rub') !!}
        </div>
        <div class="suffix">за м³</div>
    </div>

    <div class="city">Севастополь</div>

</div>