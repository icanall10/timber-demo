<div class="forum-post-block forum-post-or-comment flex flex-nowrap">

    <div class="left">
        <div class="avatar-and-name">
            {!! $self->render('avatar') !!}
            {!! $self->render('name') !!}
        </div>

        {!! $self->render('info') !!}
    </div>

    <div class="center flex flex-column flex-nowrap">
        {!! $self->render('text') !!}

        <div class="footer flex flex-bottom">
            {!! $self->render('date') !!}
            {!! $self->render('links') !!}
        </div>
    </div>

</div>