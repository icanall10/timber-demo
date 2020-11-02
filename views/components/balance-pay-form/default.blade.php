<form action="#"
      class="{{ $self->getFormId() }}"
      enctype="multipart/form-data"
      method="post"
>
    @csrf

    {{ Form::hidden('user_id', $self->getUser()->id) }}

    <div class="form-inner">
        <div class="form-group item-value flex flex-left flex-middle">
            {{ Form::text('value', 1000) }}
            <div class="suffix">{{ __('site.balance-pay-form.rub') }}</div>
        </div>

        <div class="payment-method-field">
            <div class="box-title">{{ __('site.balance-pay-form.payment-method-label') }}</div>

            <div class="items flex flex-left">
                @foreach($self->getPaymentMethods() as $key => $name)
                    <button
                       class="item clean"
                       data-request="{{ $self->ajax('onPay') }}"
                       data-request-data="{{ $self->ajaxData(['payment_method' => $key]) }}"
                    >
                        <span>
                            <span class="icon">{!! icon($key) !!}</span>
                            <span class="name">{{ $name }}</span>
                        </span>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</form>