<div class="menu">
    <ul class="flex">
        @foreach($self->getMenuItems() as $item)
            <li class="{{ $self->isCurrentPath($item->url) ? 'active' : '' }}">
                <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
            </li>
        @endforeach
    </ul>
</div>