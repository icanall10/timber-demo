<div class="links flex">
    <div class="item flex flex-center">
        <a href="#"
           class="{{ $self->getFinanceType() == 'revenue' ? 'active' : '' }}"
           data-request="{{ $self->ajax('onChangeFinancesType') }}"
           data-request-data="{{ $self->ajaxData(['type' => 'revenue']) }}"
        >Выручка</a>
    </div>

    <div class="item flex flex-center">
        <a href="#"
           class="{{ $self->getFinanceType() == 'profit' ? 'active' : '' }}"
           data-request="{{ $self->ajax('onChangeFinancesType') }}"
           data-request-data="{{ $self->ajaxData(['type' => 'profit']) }}"
        >Прибыль</a>
    </div>

    <div class="item flex flex-center">
        <a href="#"
           class="{{ $self->getFinanceType() == 'cost' ? 'active' : '' }}"
           data-request="{{ $self->ajax('onChangeFinancesType') }}"
           data-request-data="{{ $self->ajaxData(['type' => 'cost']) }}"
        >Стоимость</a>
    </div>
</div>