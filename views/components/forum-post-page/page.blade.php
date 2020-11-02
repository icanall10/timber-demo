<div class="forum-post-page page">
    <div class="container">

        {!! $self->render('post') !!}

    </div>
</div>


<div data-forum-post-page-viewed
     data-request="{{ $self->ajax('onViewed') }}"
     data-request-data='@json(['model_id' => $self->getModel()->id])'
></div>