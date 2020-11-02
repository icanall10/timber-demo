@if ($self->getCategory() and !$self->hasChildren())

    <x-forum-posts-list :category="$self->getCategory()"/>
    
@endif