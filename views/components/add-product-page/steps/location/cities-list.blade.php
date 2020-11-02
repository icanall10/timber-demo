@php($items = $self->getCities())

@if ($items->count())
    <div class="items">
        <div class="inner">
            <ul>
                @foreach($items as $item)
                    <li>
                        <a href="{{ $self->getStepUrl('info', ['category' => $self->getCategory()->id, 'city' => $item->id]) }}">
                            {{ $item->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if (!$self->getCity() and !request('search_city'))
    <p>{{ __('site.add-product-page.input-city-name') }}</p>
@endif

@if (request('search_city') and !$items->count())
    <p>{{ __('site.add-product-page.cities-list-empty') }}</p>
@endif
