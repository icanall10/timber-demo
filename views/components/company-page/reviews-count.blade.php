@php($count = $self->getModel()->getReviewsCount())

<div class="reviews-count">
    <a href="{{ $self->getModel()->getReviewsPageUrl() }}">
        {{ $count }}
        {{ plural_form(
            $count,
            __('site.company-page.review-count.form1'),
            __('site.company-page.review-count.form2'),
            __('site.company-page.review-count.form3')
        ) }}
    </a>
</div>