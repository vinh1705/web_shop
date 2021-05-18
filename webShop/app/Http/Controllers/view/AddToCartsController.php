<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Items;
use App\Product;
use Cart;

class AddToCartsController extends Controller
{
    public function getAddToCarts($id_categories, $id, $slug)
    {
        $categories = Items::all();
        $product = Product::where('id', $id)->first();
        $nameCategories = Items::where('id', $id_categories)->first();
        Cart::add(['id' => $product->id, 'name' => $product->name, 'price' => $product->price_sale, 'qty' => 1, 'options' =>['img' => $product->img_banner, 'price_not_sale' => $product->price, 'name_categories' => $nameCategories->categories,'id_categories' => $nameCategories->id, 'slug_product' => $product->slug]]);

        if (is_null($product) || is_null($nameCategories)) {
            return back();
        }else {
            return back()->with('alert_success', 'Thêm vào giỏ hàng thành công');
        }
    }
    public function getViewAddToCarts()
    {
        $categories = Items::all();
        $viewCartProduct = Cart::content();
        $total = Cart::total();
        $data = [
            'total' => $total,
            'viewCartProduct' => $viewCartProduct,
            'categories' => $categories,
        ];
        // dd($viewCartProduct->options);
        if (count($viewCartProduct) <= 0) {
            return view('thame-view.order.list-cart', $data);
        }
        return view('thame-view.order.list-cart-product', $data);
    }

    public function getDeleteCart($rowId)
    {
        Cart::remove($rowId);
        $categories = Items::all();
        $viewCartProduct = Cart::content();
        $total = Cart::total();
        $data = [
            'total' => $total,
            'viewCartProduct' => $viewCartProduct,
            'categories' => $categories,
        ];
        if (count($viewCartProduct) <= 0) {
            return view('thame-view.order.list-cart', $data);
        }
        return view('thame-view.order.list-cart-product', $data);
    }

    public function getUpdateCart(Request $request, $id, $qty)
    {
        return response()->json($request->all());
        if(Request::ajax()){
            $id = Request::get('rowId');
            $qty = Request::get('qty');
            Cart::update($id, $qty);
        }
    }
}











