@php($model = $self->getModel())

<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('action', $self->getModel()->id ? 'edit' : 'create') }}

    {{ Form::hidden('model_id', $self->getModel()->id) }}
    {{ Form::hidden('company_id', $self->getCompany()->id) }}

    <div class="form-inner">

        <div class="form-group item-rating">
            <label for="#">Оценка</label>

            <div data-review-form-rating="{{ (int)$model->id }}">
                {!! $self->render('rating') !!}
            </div>
        </div>

        <div class="form-group item-name">
            {{ Form::label($self->getFormId() . '-name', 'Имя') }}
            {{ Form::text('name', $model->name ?: optional(Auth::user())->name, [
                'id' => $self->getFormId() . '-name'
            ]) }}
        </div>

        <div class="form-group item-text">
            {{ Form::label($self->getFormId() . '-text', 'Отзыв') }}
            {{ Form::textarea('text', $model->text, [
                'id' => $self->getFormId() . '-text',
                'rows' => 6
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button($self->isEdit() ? __('site.review-form.update') : __('site.review-form.create'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>