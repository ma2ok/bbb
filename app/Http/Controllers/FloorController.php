<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Store;
use App\Floor;
use App\Type;

class FloorController extends Controller
{
    public function floor($store_id)
    {
        $store = Store::where('store_id', $store_id)->first();
        $floors = $store->floors;
        $types = $store->types;

        return view("floor")
            ->with('store', $store)
            ->with('types', $types)
            ->with('floors', $floors);
    }

    // ファイルアップロード処理
    public function upload(Request $request, $store_id)
    {
        $this->validate($request, [
            'map' => ['required', 'file', 'image', 'mimes:jpeg,png',]
        ]);

        $filename = $request->file('map')->getClientOriginalName();
        $floor = new Floor([
            'floor' => $request->floor,
            'floor_map' => $filename,
        ]);
        $request->file('map')->storeAs('public/image/floor_map', $filename);
        $store = Store::where('store_id', $store_id)->first();
        $store->floors()->save($floor);
        return redirect()->back()->with('alert', 'アップロード成功');
    }

    public function delete($floor_id)
    {
        $filename = Floor::where('floor_id', $floor_id)->first()->floor_map;
        Storage::delete('public/image/floor_map/' . $filename);
        Floor::where('floor_id', $floor_id)->delete();
        return redirect()->back()->with('alert', '削除成功');
    }

    public function position(Request $request)
    {   
        $floor = Floor::where('floor_id', $request->floor)->first();
        Type::where('type_id', $request->type_id)
            ->update([
                'floor' => $floor->floor,
                'position' => $request->position,
            ]);
            return redirect()->back()->with('alert', '位置設置完了');
    }
}
