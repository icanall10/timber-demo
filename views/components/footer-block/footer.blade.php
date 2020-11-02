<div class="footer">
    <div class="container inner flex flex-middle">

        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('img/logo-footer.png') }}" alt="">
        </a>

        {!! $self->render('social') !!}

        <a href="{{ url('rules') }}" class="rules">Пользовательское соглашение</a>

    </div>
</div>