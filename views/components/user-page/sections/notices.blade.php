<div class="user-page-section-messages">

    <div class="section-header">
        <h1>{{ __('site.user-page.notices-h1') }}</h1>
    </div>

    <x-notices-list :user="$self->getModel()"/>

</div>