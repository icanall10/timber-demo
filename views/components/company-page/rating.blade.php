@php($rating = $self->getModel()->getRating())

<div class="rating flex flex-left flex-middle">
    @foreach([1, 2, 3, 4, 5] as $value)
        <span>
            {!! icon('star-' . ($value <= $rating ? 'yes' : 'no')) !!}
        </span>
    @endforeach
</div>