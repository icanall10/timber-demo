<li>
    <a href="{{ url('forum') }}">
        {{ __('site.forum-page.breadcrumb') }}
    </a>
</li>

@foreach($self->getParents() as $item)
    <li>
        <a href="{{ $item->getPageUrl() }}">
            {{ $item->name }}
        </a>
    </li>
@endforeach