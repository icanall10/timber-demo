@php($user = $self->getUser())

<div class="user flex flex-middle flex-left">

    @if ($user)

        <div class="link" data-header-block-notices-link>
            {!! $self->render('notices-link') !!}
        </div>

        <div class="link">
            <a href="{{ $user->getPageUrl() }}" title="{{ $user->name }}">
                {!! icon('user') !!}
                <span class="user-name">{{ $user->name }}</span>
            </a>
        </div>

    @else

        <div class="link">
            <a href="#"
               data-request="AuthModal::onModalLogin"
               data-request-data="{{ $self->ajaxData([
                'type' => 'register'
           ]) }}"
            >
                {!! icon('user') !!}
                <span class="user-name">{{ __('site.header-block.sing-in-do') }}</span>
            </a>
        </div>

    @endif

</div>