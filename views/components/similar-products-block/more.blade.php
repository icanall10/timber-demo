@if ($self->hasMore())
    <div class="more">
        <a href="#"
           data-request="{{ $self->ajax('onLoadMore') }}"
           data-request-data="{{ $self->ajaxData([
               'page' => $self->getPage() + 1,
               'model_id' => $self->getModel()->id
           ]) }}"
        >
            {{ __('site.similar-products-block.more') }}
        </a>
    </div>
@endif