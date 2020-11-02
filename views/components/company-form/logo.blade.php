@php($model = $self->getModel())
@php($file = $self->getLogo())

<div class="image-field">

    @if ((!$file and !optional($model)->logo) or request('delete_logo'))

        <div class="input-file">
            {{ Form::file('logo', [
                'data-request' => $self->ajax('onUploadLogo'),
                'accept' => implode(',', helpers()->getImageExtensions(true))
            ]) }}
        </div>

        <div class="img empty upload">
            {!! icon('no-image') !!}
        </div>
        <div class="name">
            <a href="#" class="upload">{{ __('site.company-form.upload') }}</a>
        </div>

    @elseif ($file)

        {{ Form::hidden('logo_filename', $self->getLogoFileName()) }}

        <div class="img">
            <img src="{{ helpers()->getBase64EncodeImage($file) }}" alt="">
        </div>
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteLogo') }}"
               data-request-data='{{ $self->ajaxData(['delete_logo' => true]) }}'
            >{{ __('site.company-form.delete') }}</a>
        </div>

    @elseif (optional($model)->logo)

        {{ Form::hidden('logo_attached', 1) }}

        <div class="img">
            <img src="{{ thumb($model->logo, 'image-field') }}" alt="">
        </div>
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteLogo') }}"
               data-request-data='{{ $self->ajaxData(['delete_logo' => true]) }}'
            >{{ __('site.company-form.delete') }}</a>
        </div>

    @endif

</div>