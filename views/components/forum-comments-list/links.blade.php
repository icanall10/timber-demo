<div class="links flex flex-right">

    @if ($item->canEdit())
        <a href="#"
           class="button extra-small"
           data-request="{{ $self->ajax('onEdit') }}"
           data-request-data='@json(['model_id' => $item->id])'
        >{{ __('site.forum-comments-list.edit') }}</a>
    @endif

{{--    @if (Auth::check())--}}
{{--            <a href="#"--}}
{{--               class="button extra-small"--}}
{{--            >{{ __('site.forum-comments-list.reply') }}</a>--}}
{{--    @endif--}}

</div>