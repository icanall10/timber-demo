@php($categoryId = $self->getCategoryId())

<div class="categories flex flex-left">
    @foreach($self->getCategories() as $item)
        <div class="item">
            <a href="#"
               class="{{ $categoryId == $item->id ? 'active' : '' }}"
               data-request="{{ $self->ajax('onChangeCategory') }}"
               data-request-data="{{ $self->ajaxData(['category_id' => $item->id]) }}"
            >{{ $item->name }}</a>
        </div>
    @endforeach
</div>