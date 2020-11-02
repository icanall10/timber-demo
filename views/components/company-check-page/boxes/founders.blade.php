@php($items = $self->getOgrnSite()->getAffiliated())

<div class="box box-founders">
    <div class="box-title">Учредители</div>

    @if (!$items->count())
        <p>Нет информации</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>ИНН</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['inn'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($items->count() > 10)
        <p class="small">Показано 10 пунктов из {{ $items->count() }}</p>
    @endif
</div>