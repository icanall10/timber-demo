@php($cities = $self->getCities())

@if ($cities->count())
    <div class="items flex">
        @foreach($cities->chunk(ceil($cities->count() / 3)) as $items)
            <ul>
                @foreach($items as $city)
                    <li>
                        <a href="{{ $city->getPageUrl() }}"
                           title="{{ optional($city->country)->name }}, {{ optional($city->region)->name }}"
                        >
                            {{ $city->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
@endif

@if (!$cities->count())
    <p class="empty">{{ __('site.cities-block.list-empty') }}</p>
@endif


