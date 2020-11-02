@php($model = $self->getModel())

<form action="#"
      class="{{ $self->getFormId() }} form-narrow"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('user_id', optional($self->getUser())->id) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::label($self->getFormId() . '-name', __('site.company-form.name')) }}
            {{ Form::text('name', optional($model)->name, [
                'id' => $self->getFormId() . '-name'
            ]) }}
        </div>

        <div class="form-group item-logo" data-company-form-logo>
            {!! $self->render('logo') !!}
        </div>

        <div class="form-group" data-company-form-city>
            {!! $self->render('city') !!}
        </div>

        <div class="form-group item-address">
            {{ Form::label($self->getFormId() . '-address', __('site.company-form.address')) }}
            {{ Form::text('address', optional($model)->address, [
                'id' => $self->getFormId() . '-address'
            ]) }}
        </div>

        <div class="form-group item-inn">
            {{ Form::label($self->getFormId() . '-inn', __('site.company-form.inn')) }}
            {{ Form::text('inn', optional($model)->inn, [
                'id' => $self->getFormId() . '-inn'
            ]) }}
        </div>

        <div class="form-group item-email">
            {{ Form::label($self->getFormId() . '-email', 'E-mail') }}
            {{ Form::text('email', optional($model)->email, [
                'id' => $self->getFormId() . '-email'
            ]) }}
        </div>

        <div class="form-group item-phone">
            {{ Form::label($self->getFormId() . '-phone', __('site.company-form.phone')) }}
            {{ Form::text('phone', optional($model)->phone, [
                'id' => $self->getFormId() . '-phone'
            ]) }}
        </div>

        <div class="form-group item-teaser">
            {{ Form::label($self->getFormId() . '-teaser', __('site.company-form.teaser')) }}
            {{ Form::text('teaser', optional($model)->teaser, [
                'id' => $self->getFormId() . '-teaser'
            ]) }}
        </div>

        <div class="form-group item-info-products">
            {{ Form::label($self->getFormId() . '-info-products', __('site.company-form.products')) }}
            {{ Form::textarea('info_products', optional($model)->info_products, [
                'id' => $self->getFormId() . '-info-products',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-info-materials">
            {{ Form::label($self->getFormId() . '-info-materials', __('site.company-form.materials')) }}
            {{ Form::textarea('info_materials', optional($model)->info_materials, [
                'id' => $self->getFormId() . '-info-materials',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-info-equipments">
            {{ Form::label($self->getFormId() . '-info-equipments', __('site.company-form.equipments')) }}
            {{ Form::textarea('info_equipments', optional($model)->info_equipments, [
                'id' => $self->getFormId() . '-info-equipments',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-info-performance">
            {{ Form::label($self->getFormId() . '-info-performance', __('site.company-form.performance')) }}
            {{ Form::textarea('info_performance', optional($model)->info_performance, [
                'id' => $self->getFormId() . '-info-performance',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-info-breeds">
            {{ Form::label($self->getFormId() . '-info-breeds', __('site.company-form.breeds')) }}
            {{ Form::textarea('info_breeds', optional($model)->info_breeds, [
                'id' => $self->getFormId() . '-info-breeds',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-info-delivery">
            {{ Form::label($self->getFormId() . '-info-delivery', __('site.company-form.delivery')) }}
            {{ Form::textarea('info_delivery', optional($model)->info_delivery, [
                'id' => $self->getFormId() . '-info-delivery',
                'rows' => 3
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.company-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>