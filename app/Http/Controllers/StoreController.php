<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Store;
use App\Location;

class StoreController extends Controller
{
    //
    public function store()
    {
        return view("store");
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'store_appearance' => ['required', 'file', 'image', 'mimes:jpeg,png']
        ]);

        $address = $request->address;
        $apiKey = "";
        $query = http_build_query([
            'address' => $address,
            'key' => $apiKey
        ]);
        $opts = [
            'http' => [
                'method' => 'GET',
                'header' => 'user-agent:MyUserAgent'
            ]
        ];
        $requestURL = "" . $query;
        $geocode = file_get_contents($requestURL, false, stream_context_create($opts));
        $output = json_decode($geocode);
        $status = $output->status;

        if ($status == "OK") {
            $store = new Store();
            $store->store_name = $request->store_name;
            $filename = $request->file('store_appearance')->getClientOriginalName();
            $store->store_appearance = $filename;
            $request->file('store_appearance')->storeAs('public/image/store_appearance', $filename);
            $store->dividedBy = '40';
            $lat = $output->results[0]->geometry->location->lat;
            $lng = $output->results[0]->geometry->location->lng;
            $geometry = DB::raw("ST_GeomFromText('POINT(" . $lat . " " . $lng . ")')");

            $location = new Location([
                'address' => $request->address,
                'location' => $geometry,
            ]);

            $store->save();
            $store = Store::latest('updated_at')->first();
            $store->location()->save($location);
            return redirect('/index');
        } else {
            return redirect()->back()->with('alert', 'Error');
        }
    }
}
