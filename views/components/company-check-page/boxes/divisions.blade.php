@php($items = $self->getZcb()->getDivisions())

<div class="box box-divisions">
    <div class="box-title">Филиалы и представительства</div>

    @if (!$items->count())
        <p>Нет филиалов и представительств</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($items->count() > 10)
        <p class="small">Показано 10 пунктов из {{ $items->count() }}</p>
    @endif
</div>