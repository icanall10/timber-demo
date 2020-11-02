@if ($self->getModel())
    <div class="similar-products-block block">

        <div class="block-title-small">{{ __('site.similar-products-block.title') }}</div>

        <div data-similar-products-block-list>
            {!! $self->render('list') !!}
        </div>

        <div data-similar-products-block-more>
            {!! $self->render('more') !!}
        </div>

    </div>
@endif