@php($rating = $item->getRating())
@php($reviewsCount = $item->getReviewsCount())

<div class="companies-list-item flex flex-nowrap flex-middle">

    <div class="img">
        <a href="{{ $item->getPageUrl() }}">
            @if ($item->logo)
                <img src="{{ thumb($item->logo, 'companies-list') }}" alt="">
            @else
                {!! icon('no-image-thin') !!}
            @endif
        </a>
    </div>

    <div class="info">
        <div class="name">
            <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
        </div>

        <div class="rating-and-review-count flex flex-middle flex-left">
            <div class="rating flex flex-left flex-middle">
                @foreach([1, 2, 3, 4, 5] as $value)
                    <span>
                    {!! icon('star-' . ($value <= $rating ? 'yes' : 'no')) !!}
                </span>
                @endforeach
            </div>

            <div class="line"></div>

            <div class="reviews-count">
                <a href="{{ $item->getReviewsPageUrl() }}">
                    {{ $reviewsCount }}
                    {{ plural_form(
                        $reviewsCount,
                        __('site.companies-list.reviews.form1'),
                        __('site.companies-list.reviews.form2'),
                        __('site.companies-list.reviews.form3')
                    ) }}
                </a>
            </div>
        </div>
    </div>

    <div class="edit">
        <a href="{{ $item->getEditUrl() }}">
            {!! icon('edit') !!}
        </a>
    </div>

</div>