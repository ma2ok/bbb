<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Support\Facades\Storage;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $stores = Store::all();
        return view('index')->with('stores', $stores);
    }

    public function delete($store_id)
    {
        $filename = Store::where('store_id', $store_id)->first()->store_appearance;
        Storage::delete('public/image/store_appearance/' . $filename);
        Store::where('store_id', $store_id)->delete();
        return redirect('/index');
    }
}
