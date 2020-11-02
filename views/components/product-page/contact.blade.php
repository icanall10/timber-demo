@php($model = $self->getModel())

<div class="contact">

    <div class="box-name">{{ __('site.product-page.contact.title') }}</div>

    <div class="links">
        @if ($phone = $model->getPhone())
            <a href="tel:{{ preg_replace("/[^0-9]/", '', $phone) }}" class="button">
                {{ __('site.product-page.contact.call') }}
            </a>
        @endif

        @if (Auth::check())
            <a href="{{ $model->user->getAddMessagePageUrl() }}" class="button">
                {{ __('site.product-page.contact.write') }}
            </a>
        @else
            <a href="#"
               class="button"
               data-request="AuthModal::onModalLogin"
               data-request-data='@json(['return_url' => $model->user->getAddMessagePageUrl()])'
            >
                {{ __('site.product-page.contact.write') }}
            </a>
        @endif
    </div>

    @if ($value = $model->site)
        <div class="site">
            Сайт: <a href="{{ $value }}" target="_blank" rel="nofollow">{{ $value }}</a>
        </div>
    @endif

</div>