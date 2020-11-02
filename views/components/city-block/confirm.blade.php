@php($service = $self->getService())

<div class="confirm" data-city-confirm>
    <div class="answer">
        {{ __('site.city-block.your-city') }} - <span class="name">{{ $service->getCity()->name }}</span>?
    </div>
    <div class="actions flex flex-center">
        <a href="#"
           data-city-confirm-link
           data-request="{{ $self->ajax('onConfirm') }}"
           data-request-data="{{ $self->ajaxData(['id' => $service->getCity()->id]) }}"
        >Да</a>
        <a href="#" data-request="{{ $self->ajax('onCitiesShow') }}">{{ __('site.city-block.not-select-other') }}</a>
    </div>
</div>
