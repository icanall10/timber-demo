@php($filters = $self->getFilters())

<x-products-list :filters="$filters" :columns="4"/>