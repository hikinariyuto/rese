<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Carbon\Carbon;
use App\Models\Reserve;
use App\Models\Favorite;

class IndexController extends Controller
{
    public function index()
    {
        $datas = Shop::all();
        return view('index',compact('datas'));
    }

    public function ShopNameSearch(Request $request)
    {
        $datas = Shop::ShopNameKeywordSearch($request->keyword)->get();
        return view('index', compact('datas'));
    }

    public function AreaSearch(Request $request)
    {
        $datas = Shop::AreaKeywordSearch($request->keyword)->get();
        return view('index', compact('datas'));
    }

    public function KindSearch(Request $request)
    {
        $datas = Shop::KindKeywordSearch($request->keyword)->get();
        return view('index', compact('datas'));
    }

    public function detail(Request $request)
    {
        $details = Shop::find($request->id);
        $time = carbon::now();
        return view('shopdetail', compact('details','time'));
    }

    public function reserve(Request $request)
    {
        $personals = $request->only(['name', 'shop_id', 'date', 'time' , 'number']);
        Reserve::create($personals);
        return view('done', compact('personals'));
    }

    public function favorite(Request $request)
    {
        $like = $request->only(['name', 'shop_id']);
        Favorite::create($like);
        return redirect('/')->with('message', '♡お気に入りに追加しました。');
    }

    public function mypage(Request $request)
    {
        $username = $request->only(['username']);
        $favorites = Favorite::where('name', '=', $username)->with('shop')->get();
        $reserves = Reserve::where('name', '=', $username)->with('shop')->get();
        return view('mypage', compact('favorites','reserves'));
    }

    public function delete(Request $request)
{
    Favorite::where('shop_id','=',$request->shop_id)->delete();
    return redirect('/home');
}
}
