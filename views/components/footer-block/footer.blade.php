<div class="footer">
    <div class="container inner flex flex-middle">

        <a href="{{ url('/') }}" class="logo">
            <span class="img">
                {!! icon('logo-footer') !!}
            </span>
            <span class="slogan">{{ __('site.slogan') }}</span>
        </a>

        {!! $self->render('social') !!}

        <a href="{{ url('rules') }}" class="rules">{{ __('site.footer-block.rules') }}</a>

    </div>
</div>