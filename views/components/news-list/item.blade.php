<div class="news-list-item">
    
    <div class="img-and-name">
        <div class="img">
            <a href="{{ $item->getPageUrl() }}">
                @if ($item->image)
                    <img src="{{ thumb($item->image, 'news-list-filter') }}" alt="">
                @endif
            </a>
        </div>

        <div class="name">
            <a href="{{ $item->getPageUrl() }}">
                {{ $item->name }}
            </a>
        </div>
    </div>

    <div class="date">{{ $item->created_at->format('d.m.Y') }}</div>

</div>