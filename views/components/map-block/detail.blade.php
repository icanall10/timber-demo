<div class="detail">
    <div class="name">{{ $company->name }}</div>

    @if ($company->address)
        <div class="field address">
            Адрес: {!! clean($company->address) !!}
        </div>

        <div class="field teaser">
            {!! clean($company->teaser) !!}
        </div>
    @endif

    <div class="actions">
        @if ($company->phone)
            <a href="tel:{{ preg_replace("/[^0-9]/", '', $company->phone) }}">Позвонить</a>
        @endif

        <a href="#">Написать</a>
    </div>
</div>