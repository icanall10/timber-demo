<div class="recommended-block">
    <div class="container">

        <div class="categories-and-filters flex">
            <div data-recommended-block-categories>
                {!! $self->render('categories') !!}
            </div>

            {!! $self->render('filters') !!}
        </div>

        <div class="block-title">Рекомендации для вас</div>

        <div data-recommended-block-list>
            {!! $self->render('list') !!}
        </div>

    </div>
</div>