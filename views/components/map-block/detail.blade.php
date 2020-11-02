<div class="detail">
    <div class="name">
        <a href="{{ $company->getPageUrl() }}">{{ $company->name }}</a>
    </div>

    @if ($company->address)
        <div class="field address">
            {{ __('site.map-block.address') }}: {!! clean($company->address) !!}
        </div>

        <div class="field teaser">
            {!! clean($company->teaser) !!}
        </div>
    @endif

    <div class="actions">
        @if ($company->phone)
            <a href="tel:{{ preg_replace("/[^0-9]/", '', $company->phone) }}">{{ __('site.map-block.call') }}</a>
        @endif

        @if (Auth::check())
            <a href="{{ $company->getUser()->getAddMessagePageUrl() }}">{{ __('site.map-block.send-message') }}</a>
        @else
            <a href="#"
               data-request="AuthModal::onModalLogin"
               data-request-data='@json(['return_url' => $company->getUser()->getAddMessagePageUrl()])'
            >{{ __('site.map-block.send-message') }}</a>
        @endif
    </div>
</div>