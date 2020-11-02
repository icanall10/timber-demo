@php($has = $self->inFavorites())

<a href="#"
   class="favorite-link {{ $has ? 'in-favorites' : '' }}"
   data-request="{{ $self->ajax('onToggle') }}"
   data-request-data="{{ $self->ajaxData([
        'model_id' => $self->getModel()->id
   ]) }}"
   title="{{ $has ? __('site.favorite-link.remove') : __('site.favorite-link.add') }}"
>
    {!! icon('heart') !!}
</a>