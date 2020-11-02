<div class="social flex">

    @if ($url = settings('instagram'))
        <a href="{{ $url }}" target="_blank">
            {!! icon('instagram') !!}
        </a>
    @endif

    @if ($url = settings('facebook'))
        <a href="{{ $url }}" target="_blank">
            {!! icon('facebook') !!}
        </a>
    @endif

    @if ($url = settings('twitter'))
        <a href="{{ $url }}" target="_blank">
            {!! icon('twitter') !!}
        </a>
    @endif

</div>