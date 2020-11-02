@php($items = $self->getZcb()->getLicenses())

<div class="box box-licenses">
    <div class="box-title">Лицензии</div>

    @if (!$items->count())
        <p>Нет лицензий</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th class="nowrap">Дата / Номер</th>
                    <th>Наименование</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>
                            {{ $item['date'] }}<br>
                            {{ $item['number'] }}
                        </td>
                        <td>
                            <div class="name">{{ $item['name'] }}</div>
                            <div class="small">{{ $item['authority'] }}</div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($items->count() > 10)
        <p class="small">Показано 10 пунктов из {{ $items->count() }}</p>
    @endif
</div>