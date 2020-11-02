@php($items = $self->getRegionsGroups())
@php($country = $self->getCountry())

<div class="items">
    <div class="inner">
        @foreach($items as $char => $regions)
            <div class="item">
                <div class="char">{{ $char }}</div>
                <ul>
                    @foreach($regions as $item)
                        <li class="{{ optional($self->getRegion())->id == $item->id ? 'active' : '' }}">
                            <a href="#"
                               data-request="{{ $self->ajax('onChangeRegion') }}"
                               data-request-data="{{ $self->ajaxData(['region' => $item->id]) }}"
                            >
                                {{ $item->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    @if ($self->getCountry() and !$items->count())
        <p>{{ __('site.add-product-page.regions-list-empty') }}</p>
    @endif
</div>