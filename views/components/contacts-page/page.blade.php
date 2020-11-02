<div class="contacts-page page">
    <div class="inner container flex flex-nowrap">

        <div class="list">
            <x-employees-list/>
        </div>

        <div class="form">
            <div class="title">{{ __('site.contacts-page.form-title') }}</div>
            <div class="text">{{ __('site.contacts-page.form-text') }}</div>

            <x-contact-form/>
        </div>

    </div>
</div>