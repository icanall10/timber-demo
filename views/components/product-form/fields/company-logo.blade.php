@php($file = $self->getCompanyLogo())

<label for="#">Логотип организации</label>

<div class="image-field">
    @if ($file)
        {{ Form::hidden('company_logo_filename', $self->getCompanyLogoFileName()) }}
        <div class="img">
            <img src="{{ helpers()->getBase64EncodeImage($file) }}" alt="">
        </div>
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteCompanyLogo') }}"
               data-request-data="{{ $self->ajaxData() }}"
            >{{ __('site.product-form.delete') }}</a>
        </div>
    @else
        <div class="img empty upload">
            {!! icon('no-image') !!}
        </div>
        <div class="name">
            <a href="#" class="upload">{{ __('site.product-form.upload-logo') }}</a>
            <div class="input-file">
                {{ Form::file('company_logo', [
                    'data-request' => $self->ajax('onUploadCompanyLogo'),
                    'accept' => implode(',', helpers()->getImageExtensions(true))
                ]) }}
            </div>
        </div>
    @endif
</div>