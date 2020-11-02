@php($model = $self->getModel())

<div class="news-page page">
    <div class="container">

        <div class="date">{{ $model->created_at->format('d.m.Y') }}</div>

        @if ($model->image)
            <div class="img">
                <img src="{{ thumb($model->image, 'small-page') }}" alt="">
            </div>
        @endif

        <div class="text html-text">
            {!! clean($model->text) !!}
        </div>

    </div>
</div>