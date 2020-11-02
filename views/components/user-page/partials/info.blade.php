@php($model = $self->getModel())

<div class="info">
    <div class="only-mobile user-menu-link-wrapper">
        {!! $self->render('menu-link') !!}
    </div>

    <div class="avatar">
        @if ($model->avatar)
            <img src="{{ thumb($model->avatar, 'user-page-avatar') }}" alt="">
        @else
            {!! icon('no-image-thin') !!}
        @endif
    </div>

    <div class="name">
        {{ $model->name }}
    </div>
</div>