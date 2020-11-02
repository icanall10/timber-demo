@php($model = $self->getModel())

<div class="menu">

    <div class="box">
        <ul>
            <li class="{{ $self->isSection('products') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('products') }}">{{ __('site.user-page.my-ads') }}</a>
            </li>
            <li class="{{ $self->isSection('favorites') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('favorites') }}">{{ __('site.user-page.favorites') }}</a>
            </li>
            <li class="{{ $self->isSection('companies') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('companies') }}">{{ __('site.user-page.my-companies') }}</a>
            </li>
            <li class="{{ $self->isSection('notices') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('notices') }}">{{ __('site.user-page.notices') }}</a>

                @if ($count = $self->getModel()->getNewNoticesCount())
                    <span class="count">{{ $count }}</span>
                @endif
            </li>
            <li class="{{ $self->isSection('messages') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('messages') }}">{{ __('site.user-page.messages') }}</a>

{{--                @if ($count = $self->getModel()->getNewMessagesCount())--}}
{{--                    <span class="count">{{ $count }}</span>--}}
{{--                @endif--}}
            </li>
        </ul>
    </div>

    <div class="box">
        <ul>
            <li class="{{ $self->isSection('services') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('services') }}">{{ __('site.user-page.services') }}</a>
            </li>
            <li class="{{ $self->isSection('balance') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('balance') }}">{{ __('site.user-page.balance') }}</a>
                <span class="balance">{!! $self->getModel()->getBalance() !!} {!! icon('rub-thin') !!}</span>
            </li>
            <li class="{{ $self->isSection('settings') ? 'active' : '' }}">
                <a href="{{ $model->getPageUrl('settings') }}">{{ __('site.user-page.settings') }}</a>
            </li>
        </ul>
    </div>

    <div class="box">
        <ul>
            <li>
                <a href="#"
                   data-request="{{ $self->ajax('onLogout') }}"
                   data-request-data="{{ $self->ajaxData() }}"
                   class="link"
                >{{ __('site.user-page.logout') }}</a>
            </li>
        </ul>
    </div>

</div>