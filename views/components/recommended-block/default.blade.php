@if ($self->getProducts()->count())
    <div class="recommended-block block">
        <div class="container">

            <div class="categories-and-filters flex">
                <div data-recommended-block-categories>
                    {!! $self->render('categories') !!}
                </div>

                {!! $self->render('filters') !!}
            </div>

            <div class="block-title">{{ __('site.recommended-block.title') }}</div>

            <div data-recommended-block-list>
                {!! $self->render('list') !!}
            </div>

        </div>
    </div>
@endif