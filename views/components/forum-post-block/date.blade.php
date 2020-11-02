<div class="date">
    {{ __('site.forum-post-block.date') }}:
    {{ $self->getModel()->created_at->format('d.m.Y H:i') }}
</div>