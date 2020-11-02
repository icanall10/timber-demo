<div class="message">

    @if ($self->isEdit())
        <p>{{ __('site.product-form.message.edited') }}</p>
    @endif

    @if ($self->isCreate())
        @if (!$self->isAuthorized() and !$self->hasExistUser())
            {!! clean(__('site.product-form.message.variant1')) !!}
        @endif

        @if (!$self->isAuthorized() and $self->hasExistUser() and !$self->getExistUser()->isActivated())
            {!! clean(__('site.product-form.message.variant2')) !!}
        @endif

        @if (!$self->isAuthorized() and $self->hasExistUser() and $self->getExistUser()->isActivated())
            {!! clean(__('site.product-form.message.variant3')) !!}
        @endif
    @endif

</div>