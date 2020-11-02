<div class="flex">
    <div class="avatar">
        @if ($avatar = optional($item->getUser())->avatar)
            <img src="{{ thumb($avatar, 'forum-post-avatar') }}" alt="">
        @else
            {!! icon('no-image') !!}
        @endif
    </div>
</div>