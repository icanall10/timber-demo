<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    @if ($self->getModel())
        {{ Form::hidden('edit', 1) }}
    @endif

    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    <div class="form-inner">

        <div class="form-group item-name">
            {{ Form::label($self->getFormId() . '-name', __('site.forum-post-form.name')) }}
            {{ Form::text('name', optional($self->getModel())->name, [
                'id' => $self->getFormId() . '-name'
            ]) }}
        </div>

        <div class="form-group item-category">
            {{ Form::label($self->getFormId() . '-category', __('site.forum-post-form.category')) }}
            {{ Form::select('category', [__('site.forum-post-form.choose-category')] + $self->getCategoryOptions(), optional($self->getModel())->forum_category_id, [
                'id' => $self->getFormId() . '-category'
            ]) }}
        </div>

        <div class="form-group item-text html-text">
            {{ Form::label($self->getFormId() . '-text', __('site.forum-post-form.text')) }}
            {{ Form::textarea('text', optional($self->getModel())->text, [
                'id' => $self->getFormId() . '-text',
                'rows' => 15,
                'data-quill'
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button(__('site.forum-post-form.button'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>