@php($model = $self->getModel())

<div class="contacts">

    @if ($model->phone)
        <div class="phone item">
            {{ __('site.company-page.phone') }}:. <a
                    href="tel:{{ preg_replace("/[^0-9]/", '', $model->phone) }}">{{ $model->phone }}</a>
        </div>
    @endif

    @if ($model->email)
        <div class="email item">
            E-mail: <a href="mailto{{ $model->email }}">{{ $model->email }}</a>
        </div>
    @endif

    <div class="contact-links flex flex-left">
        @if ($model->phone)
            <a href="tel:{{ preg_replace("/[^0-9]/", '', $model->phone) }}"
               class="button big"
            >{{ __('site.company-page.call') }}</a>
        @endif

        @if (Auth::check())
            <a href="{{ $model->getUser()->getAddMessagePageUrl() }}"
               class="button big"
            >{{ __('site.company-page.write') }}</a>
        @else
            <a href="#"
               class="button big"
               data-request="AuthModal::onModalLogin"
               data-request-data='@json(['return_url' => $model->getUser()->getAddMessagePageUrl()])'
            >{{ __('site.company-page.write') }}</a>
        @endif
    </div>

</div>