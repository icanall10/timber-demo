<div class="forum-post">

    <x-forum-post-block :model="$self->getModel()"/>

    <x-forum-comments-list :post="$self->getModel()"/>

    @if (Auth::check())
        <div class="form">
            <x-forum-comment-form :post="$self->getModel()"/>
        </div>
    @else
        <div class="form flex">
            <a href="#"
               class="button"
               data-request="AuthModal::onModalLogin"
               data-request-data='@json(['return_url' => request()->fullUrl()])'
            >{{ __('site.forum-comment-form.button-create') }}</a>
        </div>
    @endif

</div>