<div class="box flex">
    <div class="box-title">{{ __('site.add-product-page.category') }}</div>
    <div class="box-value">
        <a href="{{ $self->getStepUrl('category', $self->getAjaxData()) }}">
            @if ($parent = $self->getParentCategory())
                {{ $parent->name }}
                <span class="sep">→</span>
            @endif

            {{ $self->getCategory()->name }}
        </a>
    </div>
</div>