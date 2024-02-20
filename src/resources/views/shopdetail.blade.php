<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
</head>

<body>
    参考->{{$details}}

    <div class="screen">

    <div class="left">
    <header class="head">
        <h2>📄 Rese</h2>
    </header>
    <div class="shop-detail">
        <p class="shop-name"><strong>{{$details -> shop_name}}</strong></p>
        <img class="shop-image" src="{{$details -> shop_image}}">
        <div class="shop-introduce">
            <p>#{{$details -> area}}#{{$details -> kind}}</p>
            <p>
                {{$details -> introduction}}
            </p>
        </div>
    </div>
    </div>

    <div class="right">
        <form class="reserve-form" action="/detail/shop_id/reserve" method="post">
            @csrf
        <div class="">
        <p class="reserve-text"><strong>予約</strong></p>

            <div class="name-box">
            <input class="name-input" type="text" value="{{ Auth::user()->name }}" readonly name="name">
            </div>

            <div class="shop-id-box">
            <input class="shop-id-input" type="hidden" value="{{$details -> id}}" readonly name="shop_id">
            </div>

            <div class="date-box">
            <input class="date-input" type="date" name="date">
            </div>
            
            <div class="time-box">
            <input class="time-input" type="time" name="time">
            </div>
            
            <div class="number-box">
            <input class="number-input" type="number" value="1" name="number">
            </div>

            <div>
                <table class="reverse-table">
                    <tr>
                        <td class="title">Shop</td>
                        <td class="content">{{$details -> shop_name}}</td>
                    </tr>
                    <tr>
                        <td class="title">Date</td>
                        <td class="content">{{$time->year}}-{{$time->month}}-{{$time->day}}</td>
                    </tr>
                    <tr>
                        <td class="title">Time</td>
                        <td class="content">{{$time->hour}}:{{$time->minute}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="reserve-box">
            <button class="reserve-button" type="submit">予約する</button>
        </div>
        </form>
    </div>
</body>

</html>