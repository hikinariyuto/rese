<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    <title>Document</title>
</head>
<body>
    <header class="head">
        <div class="rese">
        <h2>📄 Rese</h2>
        </div>
    <div class="search-space">
    <form class="search-form" action="/index/ShopNameSearch" method="get">
    @csrf
    <div class="search-form__item">
    <input class="search-form__item-input" type="text" name="keyword" value="店名を入力">
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">🔍</button>
    </div>
    </form>

    <form class="search-form" action="/index/AreaSearch" method="get">
    @csrf
    <div class="search-form__item">
    <input class="search-form__item-input" type="text" name="keyword" value="エリアを入力">
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">🔍</button>
    </div>
    </form>

    <form class="search-form" action="/index/KindSearch" method="get">
    @csrf
    <div class="search-form__item">
    <input class="search-form__item-input" type="text" name="keyword" value="ジャンルを入力">
    </div>
    <div class="search-form__button">
      <button class="search-form__button-submit" type="submit">🔍</button>
    </div>
    </form>
    </div>
    </header>

    <div class="favorite_alert">
    {{ session('message') }}
    </div>

    <div class="card-list">
@foreach ($datas as $data)
    <div class="card">
        <div class="card-image">
            <img class="shop-image" src="{{ $data -> shop_image}}">
        </div>
        <div class="card-content">
            <h2 class="shop-name">{{ $data -> shop_name}}</h2>
            <p class="shop-kind">#{{ $data -> area}}#{{ $data -> kind}}</p>
            <form action="/detail/shop_id" method="get">
            @csrf
            <input type="hidden" name="id" value="{{ $data -> id}}">
            <button class="shop-detail" type="submit">詳しく見る</button>
            </form>
            <form action="/favorite" method="post">
                @csrf
                <input type="hidden" name="shop_id" value="{{ $data -> id}}">
                <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                <button class="favorite" type="submit">♡お気に入り</button>
            </form>
        </div>
    </div>
@endforeach
    </div>

</div>
</body>
</html>

