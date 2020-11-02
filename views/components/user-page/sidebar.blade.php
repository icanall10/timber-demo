@php($model = $self->getModel())

<div class="user-page-sidebar">

    {!! $self->render('partials.info') !!}

    <div class="only-desktop-or-tablet">
        {!! $self->render('partials.menu') !!}
    </div>

</div>