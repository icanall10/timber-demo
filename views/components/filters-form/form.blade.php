<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
      data-request="{{ $self->ajax('onSubmit') }}"
>
    @csrf

    <div class="form-inner">

        @foreach($self->getAllowedFields() as $filter)
            <div class="filter" data-filter="{{ $filter->getCode() }}">
                {!! $self->render('filter', compact('filter')) !!}
            </div>
        @endforeach

    </div>
</form>