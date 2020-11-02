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

    {{ Form::hidden('forum_post_id', optional($self->getPost())->id) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}

    <div class="form-inner">

        <div class="form-group item-text html-text">
            {{ Form::label($self->getFormId() . '-text', 'Комментарий') }}
            {{ Form::textarea('text', optional($self->getModel())->text, [
                'id' => $self->getFormId() . '-text',
                'data-quill'
            ]) }}
        </div>

        <div class="form-group item-actions">
            {{ Form::button($self->isEdit() ? __('site.forum-comment-form.button-create') : __('site.forum-comment-form.button-update'), [
                'type' => 'submit'
            ]) }}
        </div>
    </div>
</form>