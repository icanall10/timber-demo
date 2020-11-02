@if ($self->isCreate())
    <p>{{ __('site.review-form.created') }}</p>
@endif

@if ($self->isEdit())
    <p>{{ __('site.review-form.updated') }}</p>
@endif