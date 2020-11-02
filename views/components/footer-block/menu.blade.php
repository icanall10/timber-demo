@php($items = $self->getMenuItems())

@if ($items->count())
    <div class="menu">
        <div class="container">
            <ul class="flex">
                @foreach($items as $item)
                    <li>
                        <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif