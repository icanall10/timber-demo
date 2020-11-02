@php($section = $self->getSection())
@php($action = $self->getAction())

<div class="user-page-section user-page-section-{{ $section }}">

    @if ($action)
        {!! $self->render("sections.{$section}.{$action}") !!}
    @else
        {!! $self->render("sections.{$section}") !!}
    @endif

</div>