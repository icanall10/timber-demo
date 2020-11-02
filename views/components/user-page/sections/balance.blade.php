<div class="user-page-section-balance">

    <div class="section-header">
        <h1>{{ __('site.user-page.add-balance') }}</h1>
    </div>

    <div class="form">
        <x-balance-pay-form :user="$self->getModel()" />
    </div>

</div>