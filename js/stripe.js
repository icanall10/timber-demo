var StripeLoadIndicator = function () {
    var self = this;
    this.counter = 0;
    this.indicator = $('<div/>').addClass('stripe-loading-indicator loaded')
        .append($('<div />').addClass('stripe'))
        .append($('<div />').addClass('stripe-loaded'));
    this.stripe = this.indicator.find('.stripe');

    $(document).ready(function () {
        $(document.body).append(self.indicator)
    })
};

StripeLoadIndicator.prototype.show = function () {
    this.counter++;

    // Restart the animation
    this.stripe.after(this.stripe = this.stripe.clone()).remove();

    if (this.counter > 1) {
        return
    }

    this.indicator.removeClass('loaded');

    $('body').addClass('stripe-progress');
};

StripeLoadIndicator.prototype.hide = function (force) {
    this.counter--;

    if (force !== undefined && force) {
        this.counter = 0
    }

    if (this.counter <= 0) {
        this.indicator.addClass('loaded');
    }

    $('body').removeClass('stripe-progress');
};

stripe = new StripeLoadIndicator();