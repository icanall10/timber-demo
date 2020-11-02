@php($model = $self->getModel())

@section('breadcrumb')
    <li>
        <a href="{{ url('catalog', $model->type) }}">
            {{ $model->getTypeName() }}
        </a>
    </li>

    @if ($category = $model->getMainCategory())
        <li>
            <a href="{{ $category->getPageUrl() }}">
                {{ $category->name }}
            </a>
        </li>
    @endif
@endsection