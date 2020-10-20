<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Type;
use App\Product;

class ProductController extends Controller
{
    public function product($store_id)
    {
        $store = Store::where('store_id', $store_id)->first();
        $types = $store->types;
        $products = Product::all();
        return view("product")
            ->with('store', $store)
            ->with('types', $types)
            ->with('products', $products);
    }

    public function addType(Request $request, $store_id)
    {
        $store = Store::where('store_id', $store_id)->first();
        $type = new Type(['type_name' => $request->type_name]);
        $store->types()->save($type);
        return redirect()->back()->with('alert', '商品種類追加成功');
    }

    public function deleteType(Request $request)
    {
        Type::where('type_id', $request->type_id)->delete();
        return redirect()->back()->with('alert', '商品種類削除成功');
    }

    public function deleteProduct(Request $request)
    {
        Product::where('product_id', $request->product_id)->delete();
        return redirect()->back()->with('alert', '商品削除成功');
    }

    public function addProduct(Request $request, $type_id)
    {
        $type = Type::where('type_id', $type_id)->first();
        $product = new Product(['product_name' => $request->product_name]);
        $type->products()->save($product);
        return redirect()->back()->with('alert', '商品追加成功');
        
    }
}
