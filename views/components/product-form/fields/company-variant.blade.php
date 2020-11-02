<div class="form-group item-company-variant radios-inline">

    <div class="form-group item-company-variant-create">
        {{ Form::radio('company_variant', 'create', $self->getCompanyVariant() == 'create', [
            'id' => $self->getFormId() . '-company-variant-create',
            'data-request' => $self->ajax('onChangeCompanyVariant'),
            'data-request-data' => $self->ajaxData()
        ]) }}
        {{ Form::label($self->getFormId() . '-company-variant-create', __('site.product-form.create-new-company')) }}
    </div>

    <div class="form-group item-company-variant-choose">
        {{ Form::radio('company_variant', 'choose', $self->getCompanyVariant() == 'choose', [
            'id' => $self->getFormId() . '-company-variant-choose',
            'data-request' => $self->ajax('onChangeCompanyVariant'),
            'data-request-data' => $self->ajaxData()
        ]) }}
        {{ Form::label($self->getFormId() . '-company-variant-choose', __('site.product-form.choose-created-company')) }}
    </div>

</div>