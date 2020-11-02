<div class="reviews-page page">
    <div class="container">

        <div class="list">
            <x-reviews-list :company="$self->getCompany()"/>
        </div>

        @if (!Auth::check())
            <div class="form flex">
                <a href="#" 
                   class="button"
                   data-request="AuthModal::onModalLogin"
                   data-request-data='@json(['return_url' => request()->fullUrl()])'
                >{{ __('site.review-form.create') }}</a>
            </div>
        @endif

        @if (Auth::check() and $self->getCompany()->canAddReview())
            <div class="form">
                <div class="form-title">{{ __('site.reviews-page.add-review') }}</div>
                <x-review-form :company="$self->getCompany()"/>
            </div>
        @endif

    </div>
</div>