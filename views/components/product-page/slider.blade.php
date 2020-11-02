@php($model = $self->getModel())
@php($images = $model->getOnlyImages())

<div class="slider flex" data-product-page-slider>

    <div class="main">
        <div class="owl-carousel">
            @foreach($images as $image)
                <div class="item">
                    <img src="{{ $image->thumb('product-page-main') }}" alt="">
                </div>
            @endforeach
        </div>
    </div>

    <div class="thumbs">
        @foreach($images as $key => $image)
            <div class="item" data-thumb data-key="{{ $key }}">
                <img src="{{ $image->thumb('product-page-thumb') }}" alt="">
            </div>
        @endforeach
    </div>

</div>