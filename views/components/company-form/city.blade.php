<div class="form-group item-city">
    {{ Form::hidden('city_id', optional($self->getCity())->id) }}

    {{ Form::label($self->getFormId() . '-city', __('site.company-form.city')) }}

    {{ Form::text('city', optional($self->getCity())->name, [
        'id' => $self->getFormId() . '-city',
        'data-request' => $self->ajax('onChangeCity'),
        'data-track-input' => 400,
        'autocomplete' => 'disabled'
    ]) }}

    <div data-company-form-city-autocomplete></div>
</div>