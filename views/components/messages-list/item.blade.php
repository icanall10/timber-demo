<div class="messages-list-item">

    <div class="header flex flex-left flex-middle">
        <div class="name">{{ $item->getUser()->name }}</div>
        <div class="date">{{ $item->created_at->format('d.m.y H:i') }}</div>
    </div>

    <div class="text">{!! helpers()->autoLink($item->text, true) !!}</div>

</div>