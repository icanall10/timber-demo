<div class="user-page-section-companies-add">

    <div class="section-header">
        <h1>{{ __('site.user-page.editing-company') }}</h1>
    </div>

    <x-company-form :user="$self->getModel()" :model="$self->getSectionModel()" />

</div>