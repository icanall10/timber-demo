<canvas class="chart"
        id="cart-{{ uniqid() }}"
        data-values='@json($self->getFinanceChartData())'
></canvas>