@php($count = $self->getProductsCount())

<div class="user-page-section-products">

    <div class="section-header">
        <div class="flex">
            <div class="h1-and-count">
                <h1>{{ __('site.user-page.my-products-h1') }}</h1>
                <p>
                    @if ($count)
                        {{ __('site.user-page.you-have-products', [
                            'count' => $count,
                            'suffix' => plural_form(
                                $count,
                                __('site.user-page.products.form1'),
                                __('site.user-page.products.form2'),
                                __('site.user-page.products.form3')
                            )
                        ]) }}
                    @else
                        {{ __('site.user-page.products-empty') }}
                    @endif
                </p>
            </div>
            <div class="add">
                <a href="{{ url('add-product') }}" class="button">{{ __('site.user-page.add-product') }}</a>
            </div>
        </div>
    </div>

    @if ($count)
        <div class="box">
            <x-products-list :items="$self->getProducts()" columns="3"/>
        </div>
    @endif



</div>