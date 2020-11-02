<div class="links flex flex-left">

    <a href="{{ url('add-product') }}" class="button">{{ __('site.header-block.add-product') }}</a>

    @if (Auth::check())
        <a href="{{ Auth::user()->getPageUrl('companies', 'add') }}"
           class="button"
        >
            {!! icon('plus') !!}
            {{ __('site.header-block.add-company') }}
        </a>
    @else
        <a href="#"
           class="button"
           data-request="AuthModal::onModalLogin"
           data-request-data='@json([
            'type' => 'login'
       ])'
        >
            {!! icon('plus') !!}
            {{ __('site.header-block.add-company') }}
        </a>
    @endif
</div>