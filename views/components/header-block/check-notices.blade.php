<div data-check-notices
     data-request="{{ $self->ajax('onCheckNotices') }}"
     data-request-data='@json(['time' => time()])'
></div>