@php($items = $self->getCountries())

<div class="items">

    @if ($items->count())
        <div class="inner">
            <ul>
                @foreach($items as $item)
                    <li class="{{ optional($self->getCountry())->id == $item->id ? 'active' : '' }}">

                        <a href="#"
                           data-request="{{ $self->ajax('onChangeCountry') }}"
                           data-request-data="{{ $self->ajaxData(['country' => $item->id]) }}"
                        >
                            {{ $item->name }}
                        </a>

                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (!$items->count())
        <p>{{ __('site.add-product-page.countries-list-empty') }}</p>
    @endif

</div>