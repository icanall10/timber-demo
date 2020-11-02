@php($model = $self->getModel())
@php($rating = $self->getRating())

{{ Form::hidden('rating', $rating) }}

<div class="rating flex flex-left">
    @foreach(options('Review', 'rating') as $key => $value)
        <a href="#"
           data-request="{{ $self->ajax('onChangeRating') }}"
           data-request-data='@json(['rating' => $key])'
        >
            @if ($rating >= $key)
                {!! icon('star-yes') !!}
            @else
                {!! icon('star-no') !!}
            @endif
        </a>
    @endforeach
</div>