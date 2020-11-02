@php($message = $item->message)

<div class="date-text">
    <div class="header flex">
        <div class="name">{{ __('site.notices-list.new-message', ['name' => $message->getUser()->name]) }}</div>
        <div class="date">{{ $item->created_at->format('d.m.Y H:i') }}</div>
    </div>
    <div class="text">{{ $message->getTeaser() }}</div>
    <div class="more flex">
        <a href="{{ $message->getPageUrl() }}" class="button extra-small">{{ __('site.notices-list.more') }}</a>
    </div>
</div>