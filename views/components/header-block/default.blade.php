<div class="header-block">

    <div class="only-desktop">
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

    <div class="only-tablet-or-mobile">
        <div class="inner container flex flex-middle">
            <div class="left flex flex-middle">
                {!! $self->render('mobile-menu-link') !!}
                {!! $self->render('logo') !!}
            </div>

            <div class="only-tablet">
                <x-lang-switch-block/>
            </div>

            <div class="only-tablet">
                <x-city-block/>
            </div>

            <div class="only-tablet">
                {!! $self->render('user') !!}
            </div>
        </div>
    </div>

</div>


<div class="only-tablet-or-mobile">
    {!! $self->render('mobile-menu') !!}
</div>


@if (Auth::check())
    {!! $self->render('check-notices') !!}
@endif