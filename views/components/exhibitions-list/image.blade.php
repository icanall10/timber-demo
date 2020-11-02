@if ($item->image)
    <img src="{{ thumb($item->image, 'exhibitions-list') }}" alt="">
@endif