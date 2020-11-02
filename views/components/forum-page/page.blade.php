<div class="forum-page page forum">
    <div class="container">

        <div class="page-header flex">

            <h1>{{ $self->getTitle() }}</h1>

            {!! $self->render('add-button') !!}
        </div>

        {!! $self->render('categories') !!}
        {!! $self->render('posts') !!}

    </div>
</div>