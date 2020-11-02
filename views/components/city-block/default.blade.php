<div class="city-block" data-city-confirm-block>

    {!! $self->render('city') !!}

    @if (!session('city_confirmed'))
        {!! $self->render('confirm') !!}
    @endif

</div>