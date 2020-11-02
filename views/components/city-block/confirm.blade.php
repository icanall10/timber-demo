@php($service = $self->getService())

<div class="confirm" data-city-confirm>
    <div class="answer">
        Ваш город - <span class="name">{{ $service->getCity()->name }}</span>?
    </div>
    <div class="actions flex flex-center">
        <a href="#"
           data-city-confirm-link
           data-ajax="{{ $self->ajax('onConfirm') }}"
           data-ajax-data="{!! json([
                'category_id' => $service->getCity()->id
           ]) !!}"
        >Да</a>
        <a href="#" data-ajax="{{ $self->ajax('onCitiesShow') }}">Нет, выбрать другой</a>
    </div>
</div>