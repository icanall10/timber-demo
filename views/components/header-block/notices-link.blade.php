@php($user = $self->getUser())
@php($count = $user->getNewNoticesCount())

<a href="{{ $user->getPageUrl('notices') }}"
   title="{{ $user->name }}"
>

    @if ($count)
        <span class="count">{{ $count }}</span>
    @endif

    {!! icon('bell') !!}

</a>

@if ($count)
    @php($id = 'notice-audio-' . uniqid())

    <audio id="{{ $id }}" autoplay>
        <source src="{{ url('audio/notification.mp3') }}" type="audio/mp3">
    </audio>
@endif