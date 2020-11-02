@php($categories = $self->getRootCategories())
@php($nextStep = $self->isCreate() ? 'location' : 'info')

<div class="categories">

    <div class="box">
        <div class="box-title">{{ __('site.add-product-page.category') }}</div>
    </div>

    <div class="items flex flex-left">

        @foreach($categories as $item)
            <div class="item">
                <div class="name">
                    <a href="{{ $self->getStepUrl($nextStep, ['category' => $item->id] + $self->getAjaxData()) }}">
                        {{ $item->name }}
                    </a>
                </div>

                @if ($item->children->count())
                    <ul>
                        @foreach($item->children as $children)
                            <li>
                                <a href="{{ $self->getStepUrl($nextStep, ['category' => $children->id] + $self->getAjaxData()) }}">
                                    {{ $children->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach

    </div>

</div>