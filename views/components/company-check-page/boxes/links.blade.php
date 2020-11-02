@php($items = $self->getOgrnSite()->getAffiliated())

<div class="box box-affiliated">
    <div class="box-title">Связи</div>

    @if (!$items->count())
        <p>Нет связанных компаний</p>
    @endif

    @if ($items->count())
        <table>
            <thead>
                <tr>
                    <th>Название</th>
                    <th>ИНН</th>
                    <th>КПП</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items->slice(0, 10) as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['inn'] }}</td>
                        <td>{{ $item['kpp'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if ($items->count() > 10)
        <p class="small">Показано 10 пунктов из {{ $items->count() }}</p>
    @endif
</div>