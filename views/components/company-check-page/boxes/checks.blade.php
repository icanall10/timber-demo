@php($items = $self->getZcb()->getChecks())

<div class="box box-checks">
    <div class="box-title">Проверки</div>

    @if (!$items->count())
        <p>Нет проверок</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Наименование</th>
                    <th>Дата</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>
                            <div class="type">{{ $item['type'] }}</div>
                            <div class="small">{{ $item['name'] }}</div>
                        </td>
                        <td>{{ $item['date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($items->count() > 10)
        <p class="small">Показано 10 пунктов из {{ $items->count() }}</p>
    @endif
</div>