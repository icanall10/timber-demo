@php($count = $self->getService()->getCount())

{!! $count !!} {{ plural_form($count, __('site.catalog-page.count.form1'), __('site.catalog-page.count.form2'), __('site.catalog-page.count.form3')) }}