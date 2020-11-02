@php
    $filter = $filter ?: new \App\Classes\Filter();
    $code = $filter->getCode();
@endphp

<div class="name">{{ $filter->getName() }}</div>

@if ($filter->isSelect())
    {{ Form::select($code, $filter->getOptions(), $self->getFilters()->getValue($code), [
        'data-request' => $filter->getHasMany() ? $self->ajax('onUpdateFilter') : $self->ajax('onSubmit'),
        'data-request-data' => $self->ajaxData([
            'code' => $filter->getCode()
        ]),
        'data-search-placeholder' => __('site.filters.search')
    ]) }}
@endif

@if ($filter->isBetween())
    <div class="between flex flex-middle flex-nowrap">
        {{ Form::text("{$code}_from", $self->getFilters()->getValue("{$code}_from"), [
            'data-request',
            'data-track-input' => 400,
            'autocomplete' => 'off',
            'placeholder' => 'от'
        ]) }}
        <div class="sep"></div>
        {{ Form::text("{$code}_to", $self->getFilters()->getValue("{$code}_to"), [
            'data-request',
            'data-track-input' => 400,
            'autocomplete' => 'off',
            'placeholder' => 'до'
        ]) }}
    </div>
@endif
