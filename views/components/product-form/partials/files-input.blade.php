{{ Form::file('files[]', [
    'data-request' => $self->ajax('onUploadFiles'),
    'accept' => implode(',', helpers()->getFileExtensions(true)),
    'multiple' => true
]) }}