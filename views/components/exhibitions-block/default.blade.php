@php($items = $self->getItems())

@if ($items->count())
    <div class="exhibitions-block block">
        <div class="container">

            <div class="block-header flex flex-middle">
                <div class="block-title">{{ __('site.exhibitions-block.exhibitions-lpk') }} {{ date('Y') }}</div>
                <div class="show-all">
                    <a href="{{ url('exhibitions') }}" class="button">
                        {!! icon('layers') !!}
                        {{ __('site.exhibitions-block.all-exhibitions') }}
                    </a>
                </div>
            </div>

            <x-exhibitions-list :items="$items"/>

        </div>
    </div>
@endif