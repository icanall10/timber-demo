@php($service = $self->getService())

<div class="lang-switch-block flex flex-middle flex-left">
    @foreach($service->getLocales() as $locale)
        <a href="{{ url('lang-switch', $locale) }}"
           class="{{ $service->isCurrentLocale($locale) ? 'active' : null }}"
        >
            {!! icon($locale) !!}
        </a>
    @endforeach
</div>