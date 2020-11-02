@php($model = $self->getModel())
@php($company = $model->company)

@if ($company)
    <a href="{{ $company->getPageUrl() }}" class="company flex flex-left flex-middle">

        @if ($company->logo)
            <span class="img">
                <img src="{{ thumb($company->logo, 'product-page-company-logo') }}" alt="">
            </span>
        @endif

        <span class="name">{{ $company->name }}</span>

    </a>
@endif