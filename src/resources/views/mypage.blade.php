<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}" />
</head>

<body>
    <header class="head">
        <h2>📄 Rese</h2>
    </header>
    <h2 class="login-username">{{ Auth::user()->name }}さん</h2>

    <div class="main">
    <div class="left">
        <h2 class="reserve-situation">予約状況</h2>
        <div class="reserve-board">
            @foreach ($reserves as $reserve)
            <p class="reserve-text">🕒 予約</p>
            <table class="reserve-table">
                <tr>
                    <td class="title">Shop</td>
                    <td class="content">{{$reserve->shop->shop_name}}</td>
                </tr>
                <tr class="date">
                    <td class="title">Date</td>
                    <td class="content">{{$reserve->date}}</td>
                </tr>
                <tr class="time">
                    <td class="title">Time</td>
                    <td class="content">{{$reserve->time}}</td>
                </tr>
                <tr class="number">
                    <td class="title">Number</td>
                    <td class="content">{{$reserve->number}}人</td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>

    <div class="right">
        <h2 class="reserve-situation">お気に入り店舗</h2>

    <div class="card-like">
@foreach ($favorites as $favorite)
    <div class="card">
        <div class="card-image">
            <img class="shop-image" src="{{ $favorite -> shop -> shop_image}}">
        </div>
        <div class="card-content">
            <h2 class="shop-name">{{ $favorite -> shop-> shop_name}}</h2>
            <p class="shop-kind">#{{ $favorite -> shop-> area}}#{{ $favorite -> shop-> kind}}</p>
            <form action="/detail/shop_id" method="get">
            @csrf
            <input type="hidden" name="id" value="{{ $favorite -> shop-> id}}">
            <button class="shop-detail" type="submit">詳しく見る</button>
            </form>
            <form action="/favorite/delete" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" name="shop_id" value="{{ $favorite -> shop-> id}}">
                <button class="favorite" type="submit">♡解除</button>
            </form>
        </div>
    </div>
@endforeach
    </div>

    </div>
    </div>
</body>

</html>