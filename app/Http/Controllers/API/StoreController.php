<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function index()
    {
        try {
            //code...
            $header = array(
                'Content-Type' => 'application/json; charset=UTF-8',
                'charset' => 'utf-8'
            );

            $result = DB::table('stores')
                ->join('locations', 'stores.store_id', '=', 'locations.store_id')
                ->select('stores.store_id', 'stores.dividedBy', 'stores.store_name', 'stores.store_appearance', 'locations.address', (DB::raw('ST_X(location) As latitude, ST_Y(location) As longitude')))
                ->get();

            return response()->json([
                'stores' => $result
            ], 200, $header, JSON_UNESCAPED_UNICODE);
        } catch (\Throwable $e) {
            //throw $th;
            return response()->json([
                'error' => [
                    'code' => [$e->getCode()],
                    'messages' => [$e->getMessage()]
                ],
            ]);
        }
    }

    public function getFloor(Request $request, $store_id)
    {
        try {
            //code...
            $header = array(
                'Content-Type' => 'application/json; charset=UTF-8',
                'charset' => 'utf-8'
            );

            $result = DB::table('floors')
                ->select('floor', 'floor_map')
                ->where('store_id', $store_id)
                ->get();

            return response()->json([
                'floors' => $result
            ], 200, $header, JSON_UNESCAPED_UNICODE);
        } catch (\Throwable $e) {
            //throw $th;
            return response()->json([
                'error' => [
                    'code' => [$e->getCode()],
                    'messages' => [$e->getMessage()]
                ],
            ]);
        }
    }

    public function searchProduct(Request $request, $store_id)
    {
        try {
            //code...
            $header = array(
                'Content-Type' => 'application/json; charset=UTF-8',
                'charset' => 'utf-8'
            );

            $keyword = $request->keyword;
            if ($keyword != '') {
                $result = DB::table('types')
                    ->join('products', 'types.type_id', '=', 'products.type_id')
                    ->select('products.product_name', 'types.type_name', 'types.position', 'types.floor')
                    ->where('types.store_id', $store_id)
                    ->where('products.product_name', 'like', "%$keyword%")
                    ->get();

                if ($result->isEmpty()) {
                    return response()->json([
                        'result' => [
                            0 => [
                                'product_name' => 'No match found',
                                'type_name' => '',
                                'position' => '',
                            ]
                        ],
                    ], 200, $header, JSON_UNESCAPED_UNICODE);
                } else {
                    return response()->json([
                        'result' => $result
                    ], 200, $header, JSON_UNESCAPED_UNICODE);
                }
            }
        } catch (\Throwable $e) {
            //throw $th;
            return response()->json([
                'error' => [
                    'code' => [$e->getCode()],
                    'messages' => [$e->getMessage()]
                ],
            ]);
        }
    }
}
