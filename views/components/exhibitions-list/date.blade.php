<div class="date flex flex-left flex-middle">
    <div class="value flex">
        <div class="day">{{ $item->date_from->format('d') }}</div>

        @if ($item->date_from->format('m') != $item->date_to->format('m'))
            <div class="month">{{ $item->date_from->formatLocalized('%B') }}</div>
        @endif
    </div>
    <div class="sep"></div>
    <div class="value flex">
        <div class="day">{{ $item->date_to->format('d') }}</div>
        <div class="month">{{ $item->date_to->formatLocalized('%B') }}</div>
    </div>
</div>