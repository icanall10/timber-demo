<div class="user-page-section-settings">

    <div class="section-header">
        <h1>{{ __('site.user-page.profile-settings') }}</h1>
    </div>

    <div class="form box-thin">
        <x-user-form :model="$self->getModel()" />
    </div>

    <div class="form box-thin">
        <div class="box-title">{{ __('site.user-page.change-password') }}</div>

        <x-password-change-form :model="$self->getModel()" />
    </div>

</div>