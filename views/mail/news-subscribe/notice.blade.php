@extends('mail.layouts.default')

@section('content')

    <p>Здравствуйте.</p>

    <p>Новости по вашей подписке:</p>

    <table class="table">
        @foreach($news as $item)
            <tr>
                <td>
                    <p>
                        <a href="{{ $item->getPageUrl() }}">{{ $item->name }}</a>
                    </p>
                    <p>
                        {{ $item->getTeaserForMail() }}
                    </p>
                </td>
            </tr>
        @endforeach
    </table>

    <p>
        Если Вы не хотите больше получать уведомления, <br>
        <a href="{{ $unsubscribeUrl }}">отпишитесь от рассылки</a>
    </p>

@endsection