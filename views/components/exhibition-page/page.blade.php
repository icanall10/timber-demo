@php($model = $self->getModel())

<div class="news-page page">
    <div class="container">

        <div class="date">{{ $model->created_at->format('d.m.Y') }}</div>

        <div class="text html-text">
            {!! clean($model->text) !!}
        </div>

    </div>
</div>