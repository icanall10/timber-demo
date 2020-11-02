@php($items = $self->getItems())

@if ($items->count())
    <div class="other-news-block block">
        <div class="container">

            <div class="block-title">{{ __('site.other-news-block.title') }}</div>

            <x-news-list :items="$items"/>

        </div>
    </div>
@endif