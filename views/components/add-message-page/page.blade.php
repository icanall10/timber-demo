<div class="add-message-page page">
    <div class="container">

        <x-message-form :branch="$self->getBranch()" :returnUrl="$self->getReturnUrl()"/>

    </div>
</div>