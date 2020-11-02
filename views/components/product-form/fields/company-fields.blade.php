@if ($self->getCompanyVariant() == 'create')
    <div class="form-group item-company-logo" data-product-form-company-logo>
        {!! $self->render('fields.company-logo') !!}
    </div>

    <div class="form-group item-company-name">
        {{ Form::label($self->getFormId() . '-company-name', __('site.product-form.company-name')) }}
        {{ Form::text('company_name', null, [
            'id' => $self->getFormId() . '-company-name'
        ]) }}
    </div>

    {!! $self->render('fields.text', [
        'field' => 'inn',
        'name' => __('site.product-form.inn')
    ]) !!}

    {!! $self->render('fields.text', [
        'field' => 'contact_face',
        'name' => __('site.product-form.contact-face')
    ]) !!}

    {!! $self->render('fields.text', [
        'field' => 'phone',
        'name' => __('site.product-form.phone')
    ]) !!}

    @if ($self->isAuthorized())
        {!! $self->render('fields.text', [
            'field' => 'email',
            'name' => 'E-mail'
        ]) !!}
    @endif
@endif

@if ($self->getCompanyVariant() == 'choose')
    <div class="form-group item-company">
        {{ Form::label($self->getFormId() . '-company', __('site.product-form.company')) }}
        {{ Form::select('company', [__('site.product-form.choose-company')] + $self->getCompanyOptions(), optional($self->getCompany())->id, [
            'id' => $self->getFormId() . '-company'
        ]) }}
    </div>
@endif