<div class="header-block">

    <div class="header">
        <div class="inner container flex flex-middle">
            {!! $self->render('logo') !!}
            <x-lang-switch-block/>
            <x-city-block/>
            {!! $self->render('links') !!}
            {!! $self->render('user') !!}
        </div>
    </div>

    <div class="footer">
        <div class="inner container flex flex-nowrap flex-middle">
            {!! $self->render('menu') !!}
            <x-search-form/>
        </div>
    </div>

</div>