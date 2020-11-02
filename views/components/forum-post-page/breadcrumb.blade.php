<li>
    <a href="{{ url('forum') }}">{{ __('site.forum-page.breadcrumb') }}</a>
</li>

@foreach($self->getModel()->getCategories() as $item)
    <li>
        <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
    </li>
@endforeach