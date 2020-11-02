@php($step = $self->getStep())

<div class="add-product-page page">
    <div class="container">

        <div data-add-product-page>
            <div class="step step-{{ $step }}">
                {!! $self->render("steps.{$step}"); !!}
            </div>
        </div>

    </div>
</div>