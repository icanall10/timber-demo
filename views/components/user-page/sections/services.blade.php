<div class="user-page-section-services">

    <div class="section-header">
        <h1>{{ __('site.user-page.services-h1') }}</h1>
    </div>

    <div class="items">
        @foreach($self->getServices() as $item)

            <a href="#"
               class="item"
               data-request="{{ $self->ajax('onBuyService') }}"
               data-request-data="{{ $self->ajaxData(['service_id' => $item->id]) }}"
            >
                <span class="item-inner flex flex-nowrap flex-middle">
                    <span class="icon">
                        @if ($item->icon)
                         <img src="{{ thumb($item->icon, 'services-list') }}" alt="{{ $item->name }}">
                     @endif
                    </span>
                    <span class="info">
                        <span class="name">{{ $item->name }}</span>
                        <span class="text">{{ $item->text }}</span>
                        <span class="price">{{ __('site.user-page.price') }}: {{ number_format($item->price, 0, ', ', ' ') }} р.</span>
                    </span>
                </span>
            </a>

        @endforeach
    </div>

</div>