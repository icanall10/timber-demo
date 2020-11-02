@php($items = $self->getItems())

<div class="forum-posts-list">

    @if ($items->count())
        <table class="responsive">
            <thead>
                <tr>
                    <th>{{ __('site.forum-posts-list.subject') }}</th>
                    <th class="center">{{ __('site.forum-posts-list.comments') }}</th>
                    <th class="center">{{ __('site.forum-posts-list.views') }}</th>
                    <th>{{ __('site.forum-posts-list.last-message') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($self->getItems() as $item)
                    <tr>
                        <td class="main">
                            <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
                        </td>
                        <td class="center">{{ number_format($item->getCommentsCount(), 0, ', ', ' ') }}</td>
                        <td class="center">{{ number_format($item->views_count, 0, ', ', ' ') }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {!! pagination($items) !!}
    @endif

    @if (!$items->count())
        <p class="empty">{{ __('site.forum-posts-list.empty') }}</p>
    @endif

</div>