@php($items = $self->getCategories())
@php($perColumn = ceil($items->count() / 4))

<div class="categories">
    <div class="container inner flex">

        @foreach($items->chunk($perColumn) as $columnItems)
            <ul>
                @foreach($columnItems as $item)
                    <li><a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        @endforeach

    </div>
</div>