@php($products = $self->getProducts())

<x-products-list :items="$products"/>