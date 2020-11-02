@php($model = $self->getModel())

<div class="links flex flex-left">

    <a href="{{ $model->getPageUrl('products') }}"
       class="button big"
    >{{ __('site.company-page.ads') }}</a>

    <a href="#"
       class="button big"
    >{{ __('site.company-page.check') }}</a>

</div>