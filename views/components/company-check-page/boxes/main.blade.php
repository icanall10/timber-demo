<div class="box box-main">

    <div class="name-and-status">
        <div class="field full">
            <div class="company-name">{{ $self->getDaDataValue('value') }}</div>
        </div>

        <div class="field full">
            <div class="status active flex flex-left flex-middle">
                @if ($self->getDaDataValue('data.state.status') == 'ACTIVE')
                    <span>Действующая организация</span>
                    {!! icon('shield') !!}
                @endif

                @if ($self->getDaDataValue('data.state.status') == 'LIQUIDATING')
                    <span class="red">Организация ликвидируется</span>
                @endif

                @if ($self->getDaDataValue('data.state.status') == 'LIQUIDATED')
                    <span class="red">Организация ликвидирована</span>
                @endif

                @if ($self->getDaDataValue('data.state.status') == 'REORGANIZING')
                    <span class="red">Организация в процессе присоединения к другому юрлицу, с последующей ликвидацией</span>
                @endif
            </div>
        </div>
    </div>

    <div class="columns flex">

        <div class="column">
            <div class="fields">

                <div class="field">
                    <div class="name">ОГРН</div>
                    <div class="value">
                        <span data-copy>{!! $self->getDaDataValue('data.ogrn') !!}</span><br>
                        <span class="small">
                            {{ \Carbon\Carbon::parse($self->getDaDataValue('data.ogrn_date'))->formatLocalized('%d %B %Y г.') }}
                        </span>
                    </div>
                </div>

                <div class="field">
                    <div class="name">ИНН/КПП</div>
                    <div class="value">
                        <span data-copy>{{ $self->getDaDataValue('data.inn') }}</span><br>
                        <span data-copy>{{ $self->getDaDataValue('data.kpp') }}</span>
                    </div>
                </div>

                <div class="field">
                    <div class="name">Дата регистрации</div>
                    <div class="value">
                        @if ($value = $self->getDaDataCarbon('data.state.registration_date'))
                            {{ $value->format('d.m.Y') }}
                        @else
                            -
                        @endif
                    </div>
                </div>

                <div class="field">
                    <div class="name">Уставный капитал</div>
                    <div class="value">
                        @if ($value = $self->getDaDataValue('data.capital.value') ?: $self->getZcbValue('уставный капитал'))
                            {{ number_format($value, 0, ', ', ' ') }} руб.
                        @else
                            Нет информации
                        @endif
                    </div>
                </div>

                <div class="field">
                    <div class="name">Юридический адрес</div>
                    <div class="value">{{ $self->getDaDataValue('data.address.value') }}</div>
                </div>

                <div class="field">
                    <div class="name">Среднесписочная численность</div>
                    <div class="value">{{ $self->getZcbValue('численность сотрудников') ?: 'Нет информации' }}</div>
                </div>

                <div class="field">
                    <div class="name">Руководитель</div>
                    <div class="value">
                        <span class="small">{{ $self->getDaDataValue('data.management.post') }}</span><br>
                        {{ $self->getDaDataValue('data.management.name') }}
                    </div>
                </div>

                @if ($value = $self->getZcbValue('данные реестра субъектов мсп'))
                    <div class="field">
                        <div class="name">Реестр МСП</div>
                        <div class="value">{{ $value }}</div>
                    </div>
                @endif

            </div>
        </div>

        <div class="column">
            <div class="fields">

                <div class="field">
                    <div class="name">Основной вид деятельности</div>
                    <div class="value">{{ $self->getZcbValue('основной вид деятельности') }}</div>
                </div>

                <div class="field">
                    <div class="name">Налоговый орган</div>
                    <div class="value">
                        {{ $self->getZcbValue('налоговый орган') }}<br>
                        <span class="small">с {{ $self->getZcbValue('дата постановки на учет в налоговый орган') }} г.</span>
                    </div>
                </div>

                <div class="field">
                    <div class="name">Коды статистики</div>
                    <div class="value">
                        ОКПО {{ $self->getDaDataValue('data.okpo') }} <br>
                        ОКАТО {{ $self->getDaDataValue('data.okato') }} <br>
                        ОКТМО {{ $self->getDaDataValue('data.oktmo') }} <br>
                        ОКФС {{ $self->getDaDataValue('data.okfs') }} <br>
                        ОКОГУ {{ $self->getDaDataValue('data.okogu') }} <br>
                    </div>
                </div>

                <div class="field">
                    <div class="name">Контакты</div>
                    <div class="value">
                        @foreach(($self->getZcbValue('телефоны') ?: []) as $phone)
                            <div class="contact">
                                <a href="tel:{{ preg_replace("/[^0-9]/", '', $phone) }}">
                                    {!! icon('phone') !!}
                                    {{ $phone }}
                                </a>
                            </div>
                        @endforeach

                        @foreach(($self->getZcbValue('emails') ?: []) as $email)
                            <div class="contact">
                                <a href="mailto:{{ $email }}">
                                    {!! icon('email') !!}
                                    {{ $email }}
                                </a>
                            </div>
                        @endforeach

                        @if (!$self->getZcbValue('телефоны') and !$self->getZcbValue('emails'))
                            <p>Нет информации</p>
                        @endif
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>