@php($service = $self->getService())

<div class="city">
    <a href="#"
       class="flex flex-left flex-middle"
       data-request="{{ $self->ajax('onCitiesShow') }}"
    >
        <span class="icon">
             {!! icon('map') !!}
        </span>

        <span class="name">
            {{ optional($service->getCity())->name }}
        </span>

        <span class="arrow">
            {!! icon('arrow-down') !!}
        </span>
    </a>
</div>