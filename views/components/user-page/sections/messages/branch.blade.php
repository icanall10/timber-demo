@php($model = $self->getModel())

<div class="user-page-section-messages-branch">

    <div class="section-header">
        <h1>{{ __('site.user-page.chat-with-user', ['name' => $self->getSectionModel()->getOtherUser($model)->name]) }}</h1>
    </div>

    <div class="list">
        <x-messages-list :branch="$self->getSectionModel()"/>
    </div>

    <div class="form">
        <x-message-form :branch="$self->getSectionModel()"/>
    </div>

</div>