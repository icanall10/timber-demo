@php($model = $self->getModel())

@if ($id = helpers()->getYoutubeVideoId($model->youtube_video))
    <div class="video">
        <div class="box-name">Видео</div>
        <iframe width="672"
                height="378"
                src="https://www.youtube.com/embed/{{ $id }}"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
        ></iframe>
    </div>
@endif