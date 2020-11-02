<div class="user-page-section-messages">

    <div class="section-header">
        <h1>{{ __('site.user-page.messages-h1') }}</h1>
    </div>

    <x-branches-list :user="$self->getModel()"/>

</div>