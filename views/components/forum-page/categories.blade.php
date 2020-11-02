@php($categories = $self->getCategories())

@if ($categories->count())
    <div class="categories">
        <table class="responsive">
            <thead>
                <tr>
                    <th>{{ __('site.forum-page.table.forums') }}</th>
                    <th class="center">{{ __('site.forum-page.table.subjects') }}</th>
                    <th class="center">{{ __('site.forum-page.table.posts') }}</th>
                    <th>{{ __('site.forum-page.table.last-message') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                    @php($comment = $item->getLastComment())

                    <tr>
                        <td class="main">
                            <a href="{{ $item->getPageUrl() }}">
                                {{ $item->name }}
                            </a>
                        </td>
                        <td class="center">{!! $item->posts_count !!}</td>
                        <td class="center">{{ $item->getCommentsCount() }}</td>
                        <td>
                            @if ($user = optional($comment)->user)
                                <div class="flex flex-left">
                                    <div class="last-date">
                                        {{ $comment->created_at->format('d.m.Y H:i') }},
                                        {{ __('site.forum-page.last-message.from') }}
                                    </div>
                                    <div class="user-name">{{ $user->name }}</div>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif