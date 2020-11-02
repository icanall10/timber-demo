<div class="mobile-menu">

    <div class="overlay" data-mobile-menu-toggle></div>

    <div class="content">

        <div class="header">
            <div class="box box-mobile-menu-link">
                <div class="inner flex flex-middle">
                    {!! $self->render('mobile-menu-link') !!}

                    <div class="only-mobile">
                        <x-lang-switch-block/>
                    </div>

                    <div class="only-mobile">
                        <x-city-block/>
                    </div>
                </div>
            </div>

            <div class="box box-menu">
                {!! $self->render('menu') !!}
            </div>
        </div>

        <div class="footer">
            <div class="box">
                <div class="inner">
                    {!! $self->render('user') !!}
                </div>
            </div>
            <div class="box">
                <div class="inner">
                    {!! $self->render('links') !!}
                </div>
            </div>
        </div>

    </div>

</div>