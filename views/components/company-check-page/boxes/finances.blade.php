<div class="box box-finances">

    <div class="box-title">Финансы</div>

    <div data-company-check-page-finances-chart>
        {!! $self->render('partials.finances-chart') !!}
    </div>

    <div class="header">
        <div data-company-page-finances-links>
            {!! $self->render('partials.finances-links') !!}
        </div>

        @php($year = \Carbon\Carbon::now()->addYears(-1)->format('Y'))

        <div class="values flex">
            <div class="item flex flex-center">
                <div class="value">{{ number_format($self->getAuditItRu()->getFinanceValue($year, 2110) / 1000000, 1, ',', ' ') }}</div>
                <div class="suffix">млн руб.</div>
            </div>
            <div class="item flex flex-center">
                <div class="value">{{ number_format($self->getAuditItRu()->getFinanceValue($year, 2400) / 1000000, 1, ',', ' ') }}</div>
                <div class="suffix">млн руб.</div>
            </div>
            <div class="item flex flex-center">
                <div class="value">{{ number_format($self->getAuditItRu()->getFinanceValue($year, 3600) / 1000000, 1, ',', ' ') }}</div>
                <div class="suffix">млн руб.</div>
            </div>
        </div>
    </div>

    <div class="info">
        <div class="title">
            Согласно сведениям ФНС за {{ \Carbon\Carbon::now()->addYears(-1)->format('Y') }} год:
        </div>

        <div class="fields">
            <div class="field">
                <div class="name">Налоги</div>
                <div class="value numeric">
                    <div class="amount">
                        {{ number_format(
                            -($self->getAuditItRu()->getFinanceValue($year, 2411) ?: $self->getAuditItRu()->getFinanceValue($year, 2410)) / 1000000,
                            1, ',', ' '
                        ) }}
                    </div>
                    <div class="suffix">млн руб.</div>
                </div>
            </div>
        </div>
    </div>

</div>