@if ($count = $self->getMoreCount())
    <div class="load-more">

        <a href="#"
           class="more button extra-small"
           data-request="{{ $self->ajax('onLoadMore') }}"
           data-request-data="{{ $self->ajaxData([
                'page' => $self->getPage() + 1
           ]) }}"
        >{{ __('site.messages-list.more') }}</a>

        <div class="count">
            Есть еще {{ $count }}
            {{ plural_form(
                $count,
                __('site.messages-list.messages.form1'),
                __('site.messages-list.messages.form2'),
                __('site.messages-list.messages.form3')
            ) }}
        </div>
    </div>
@endif