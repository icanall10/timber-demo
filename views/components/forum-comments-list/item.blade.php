<div class="comments-list-item forum-post-or-comment flex flex-nowrap">

    <div class="left">
        <div class="avatar-and-name">
            {!! $self->render('avatar', compact('item')) !!}
            {!! $self->render('name', compact('item')) !!}
        </div>

        {!! $self->render('info', compact('item')) !!}
    </div>

    <div class="center flex flex-column flex-nowrap">
        {!! $self->render('text', compact('item')) !!}

        <div class="footer flex flex-bottom">
            {!! $self->render('date', compact('item')) !!}
            {!! $self->render('links', compact('item')) !!}
        </div>
    </div>

</div>