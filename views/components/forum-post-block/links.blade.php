<div class="links flex flex-right">

    @if ($self->getModel()->canEdit())
        <a href="{{ $self->getModel()->getEditPageUrl() }}"
           class="button extra-small"
        >{{ __('site.forum-post-block.edit') }}</a>
    @endif

</div>