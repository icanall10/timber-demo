<div class="reviews-list-item">
    <div class="header flex flex-middle">
        <div class="name-and-date flex">
            <div class="name">{{ $item->name }}</div>
            <div class="date">{{ $item->created_at->format('d.m.Y H:i') }}</div>
        </div>
        <div class="rating flex flex-left">
            @foreach([1, 2, 3, 4, 5] as $value)
                @if ($item->getRating() >= $value)
                    {!! icon('star-yes') !!}
                @else
                    {!! icon('star-no') !!}
                @endif
            @endforeach
        </div>
    </div>
    <div class="text">{{ $item->text }}</div>

    @if ($item->canEdit())
        <div class="links flex flex-right">
            <a href="#"
               class="button extra-small"
               data-request="reviewForm::onModal"
               data-request-data='@json([
                    'model_id' => $item->id
               ])'
            >{{ __('site.reviews-list.edit') }}</a>
        </div>
    @endif
</div>