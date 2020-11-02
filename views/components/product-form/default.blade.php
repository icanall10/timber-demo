<form action="#"
      class="{{ $self->getFormId() }} form-narrow"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    {{ Form::hidden('category', optional($self->getCategory())->id) }}
    {{ Form::hidden('city', optional($self->getCity())->id) }}
    {{ Form::hidden('model_id', optional($self->getModel())->id) }}
    {{ Form::hidden('action', $self->getAction()) }}


    <div class="form-inner">

        {!! $self->render('fields.type') !!}

        {!! $self->render('fields.text', [
             'field' => 'name',
             'name' => __('site.product-form.name')
        ]) !!}

        @if ($self->isEdit())
            {!! $self->render('fields.checkbox', [
                'field' => 'published',
                'name' => __('site.product-form.published')
            ]) !!}
        @endif

        @if ($self->isAuthorized())
            {!! $self->render('fields.company-variant') !!}
        @endif

        <div class="form-group" data-product-form-company-fields>
            {!! $self->render('fields.company-fields') !!}
        </div>

        @if (!$self->isAuthorized())
            {!! $self->render('fields.text', [
                'field' => 'email',
                'name' => 'E-mail',
                'help' => __('site.product-form.email-help')
            ]) !!}
        @endif

        {!! $self->render('fields.filter-fields') !!}

        {!! $self->render('fields.text', [
            'field' => 'price',
            'name' => $self->getFilters()->getFilter('price')->getName()
        ]) !!}

        {!! $self->render('fields.textarea', [
            'field' => 'text',
            'name' => __('site.product-form.description')
        ]) !!}

        {!! $self->render('fields.files') !!}

        {!! $self->render('fields.text', [
             'field' => 'youtube_video',
             'name' => __('site.product-form.video')
         ]) !!}

        {!! $self->render('fields.text', [
             'field' => 'site',
             'name' => __('site.product-form.site')
        ]) !!}

        <div class="form-group item-actions">
            {{ Form::button($self->isCreate() ? __('site.product-form.button-publish') : __('site.product-form.button-save'), [
                'type' => 'submit',
                'class' => 'big'
            ]) }}

            @if ($self->isCreate())
                <div class="help">
                    {!! clean(__('site.product-form.button-help')) !!}
                </div>
            @endif
        </div>
    </div>
</form>