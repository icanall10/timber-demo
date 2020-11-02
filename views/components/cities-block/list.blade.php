@php($cities = $self->getCities())

@if ($cities->count())
    <div class="items flex">
        @foreach($cities->chunk(ceil($cities->count() / 3)) as $items)
            <ul>
                @foreach($items as $city)
                    <li>
                        <a href="{{ $city->getPageUrl() }}">{{ $city->name }}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
@endif

@if (!$cities->count())
    <p class="empty">Нет городов</p>
@endif


