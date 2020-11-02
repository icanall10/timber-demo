@php($items = $self->getCities())

<div class="city-autocomplete">
    @if ($items->count())
        <ul>
            @foreach($items as $item)
                <li>
                    <a href="#"
                       data-request="{{ $self->ajax('onSelectCity') }}"
                       data-request-data="{{ $self->ajaxData(['city_id' => $item->id]) }}"
                    >
                        {{ $item->name }},

                        @if ($item->region and $item->country and $item->region->name != $item->country->name)
                            {{ $item->region->name }}
                        @endif

                        @if ($item->country)
                            {{ $item->country->name }}
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p class="empty">{{ __('site.company-form.autocomplete-empty') }}</p>
    @endif
</div>