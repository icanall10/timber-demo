<div class="location flex flex-left flex-middle">
    {!! icon('location') !!}
    {{ data_get($item, 'city.country.name') }},
    {{ App::isLocale('ru') ? 'г.' : '' }}
    {{ $item->city->name }}
</div>