@php($model = $self->getModel())
@php($companies = $self->getCompanies())
@php($count = $self->getCompaniesCount())

<div class="user-page-section-companies">
    <div class="container">

        <div class="section-header">
            <div class="flex">
                <div class="h1-and-count">
                    <h1>Мои компании</h1>

                    <p>
                        @if ($count)
                            {{ __('site.user-page.you-have-companies', [
                                'count' => $count,
                                'suffix' => plural_form(
                                    $count,
                                    __('site.user-page.companies.form1'),
                                    __('site.user-page.companies.form2'),
                                    __('site.user-page.companies.form3')
                                )
                            ]) }}
                        @else
                            {{ __('site.user-page.companies-empty') }}
                        @endif
                    </p>
                </div>

                <div class="add">
                    <a href="{{ $model->getPageUrl('companies', 'add') }}"
                       class="button"
                    >{{ __('site.user-page.add-company') }}</a>
                </div>
            </div>
        </div>

        @if ($companies->count())
            <div class="box">
                <x-companies-list :items="$companies"/>
            </div>
        @endif

    </div>
</div>