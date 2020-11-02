@php($items = $self->getOgrnSite()->getArbitration())

<div class="box box-arbitration">
    <div class="box-title">Судебные дела</div>

    @if (!$items->count())
        <p>Нет судебных дел</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Наименование / Статус</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>
                            <div class="name">{{ $item['name'] }}</div>
                            <div class="small">{{ $item['status'] }}</div>
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