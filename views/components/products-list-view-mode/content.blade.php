<div class="products-list-view-mode flex">

    <a href="#"
       class="{{ $self->isMode('grid') ? 'active' : '' }}"
       data-request="{{ $self->ajax('onChange') }}"
       data-request-data="{{ $self->ajaxData(['mode' => 'grid']) }}"
    >
        {!! icon('grid') !!}
    </a>

    <a href="#"
       class="{{ $self->isMode('list') ? 'active' : '' }}"
       data-request="{{ $self->ajax('onChange') }}"
       data-request-data="{{ $self->ajaxData(['mode' => 'list']) }}"
    >
        {!! icon('list') !!}
    </a>

</div>