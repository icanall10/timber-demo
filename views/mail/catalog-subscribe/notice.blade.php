@extends('mail.layouts.default')

@section('content')

    @if ($name)
        <p>Здравствуйте, {{ $name }}.</p>
    @else
        <p>Здравствуйте.</p>
    @endif

    <p>Есть новые объявления по вашей <a href="{{ $url }}">подписке</a>:</p>

    <table class="table">
        @foreach($products as $item)
            <tr>
                <td>
                    <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
                    <p>{{ $item->getPrice() }} р.</p>
                </td>
            </tr>
        @endforeach
    </table>

    @if ($totalCount > $count)
        <p>
            Показано {{ $count }} из {{ $totalCount }}
            {{ plural_form($totalCount, 'объявление', 'объявления', 'объявлений') }}.
            <a href="{{ $url }}">Смотреть все</a>
        </p>
    @endif

    <p>
        Если Вы не хотите больше получать уведомления, <br>
        <a href="{{ $unsubscribeUrl }}">отпишитесь от рассылки</a>
    </p>

@endsection