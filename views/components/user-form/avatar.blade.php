@php($model = $self->getModel())
@php($file = $self->getAvatar())

<label for="#">{{ __('site.user-form.photo') }}</label>

<div class="image-field">

    @if ((!$file and !optional($model)->avatar) or request('delete_avatar'))

        <div class="input-file">
            {{ Form::file('avatar', [
                'data-request' => $self->ajax('onUploadAvatar'),
                'accept' => implode(',', helpers()->getImageExtensions(true))
            ]) }}
        </div>

        <div class="img empty upload">
            {!! icon('no-image') !!}
        </div>
        <div class="name">
            <a href="#" class="upload">{{ __('site.user-form.upload-photo') }}</a>
        </div>

    @elseif ($file)

        {{ Form::hidden('avatar_filename', $self->getAvatarFileName()) }}

        <div class="img">
            <img src="{{ helpers()->getBase64EncodeImage($file) }}" alt="">
        </div>
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteAvatar') }}"
               data-request-data='{{ $self->ajaxData(['delete_avatar' => true]) }}'
            >{{ __('site.user-form.delete') }}</a>
        </div>

    @elseif (optional($model)->avatar)

        {{ Form::hidden('avatar_attached', 1) }}

        <div class="img">
            <img src="{{ thumb($model->avatar, 'image-field') }}" alt="">
        </div>
        <div class="delete">
            <a href="#"
               class="button extra-small"
               data-request="{{ $self->ajax('onDeleteAvatar') }}"
               data-request-data='{{ $self->ajaxData(['delete_avatar' => true]) }}'
            >{{ __('site.user-form.delete') }}</a>
        </div>

    @endif

</div>