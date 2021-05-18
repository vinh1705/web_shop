<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\Item;
use App\InformationOrder;
use App\UserCart;
use App\Users;
use Validator;

class ItemController extends Controller
{
    public function getItem($id)
    {
        $categories = Items::all();
        $categories_first = Items::where('id', $id)->first();
        $company = Item::where('id_categories', $id)->get();
        if (is_null($categories_first)) {
            return redirect()->route('Index')->with('alert_error', 'Danh mục không tồn tại');
        }
        $data = [
            'categories_first' => $categories_first,
            'id_categories' => $id,
            'categories' => $categories,
            'company' => $company
        ];
        return view('thame.item.items', $data);
    }

    public function getDeleteItem($id)
    {
        if (is_null($id)) {
            return back()->with('alert_error', 'Danh mục không tồn tại');
        }
        $deleteProduct = Item::where('id', $id)->first();
        if (is_null($deleteProduct)) {
            return back()->with('alert_error', 'Xóa danh mục không thành công');
        }
        $deleteProduct->delete();
        return back()->with('alert_error', 'Xóa danh mục thành công');
    }

    public function postItem(Request $request, $id)
    {
        if (is_null($id)) {
            return back()->with('alert_error', 'Thêm hãng sản phẩm thất bại');
        }
        $required = "Không được để trống";
        $validator = Validator::make($request->all(), [
            'addCategories' => 'required',
        ], [
            'addCategories.required' => 'Tên danh mục'. $required,
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        Item::insert([
            'id_categories' =>$id,
            'company' => $request->addCategories,
            'logo' => $request->logo
        ]);
        return redirect()->route('Categories',$id)->with('alert_success','Thêm hãng sản phẩm thành công');
    }

    public function postItems(Request $request)
    {
        $required = "Không được để trống";
        $validator = Validator::make($request->all(), [
            'items' => 'required',
        ], [
            'items.required' => 'Loại danh mục'. $required,
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $items = Items::insert([
            'categories' => $request->items,
        ]);
        return redirect()->route('Index')->with('alert_success');
    }

    public function getDeleteCategories($id)
    {
        $deleteCategories = Items::where('id', $id)->first();
        if (is_null($deleteCategories)) {
            return back()->with('alert_error', 'Xóa danh mục không thành công');
        }
        $deleteCategories->Item()->delete();
        $deleteCategories->delete();
        return redirect()->route('Index')->with('alert_error', 'Xóa danh mục thành công');
    }

    public function postEditcategories(Request $request, $id)
    {
        if (is_null($id)) {
            return back()->with('alert_error', 'Sửa danh mục thất bại');
        }
        $editCategories = Items::where('id', $id)->first();
        if (is_null($editCategories)) {
            return back()->with('alert_error', 'Sửa danh mục thất bại');
        }
        $editCategories->update([
            'categories' => $request->items
        ]);
        return back()->with('alert_success','Sửa danh mục thành công');
    }

    public function postEditCompany(Request $request, $id)
    {
        if (is_null($id)) {
            return back()->with('alert_error', 'Sửa hãng sản xuất thất bại');
        }
        $editCompany = Item::where('id', $id)->first();
        if (is_null($editCompany)) {
            return back()->with('alert_error', 'Sửa hãng sản xuất thất bại');
        }
        // dd($request->editlogo);
        // dd($editCompany->logo);
        $editCompany->update([
            'company' => $request->company,
            'logo' => $request->editlogo,
        ]);
        dd($editCompany);
        return back()->with('alert_success','Sửa hãng sản xuất thành công');
    }

    public function getListCart()
    {
        $categories = Items::all();
        $information_cart = InformationOrder::join('user_cart', 'information_order.id_cart', '=', 'user_cart.id_cart')
                                              -> select('Information_order.*', 'user_cart.id_cart', 'user_cart.phone')
                                              ->orderBy('id', 'desc')->get();
        $information_user = InformationOrder::join('users', 'information_order.id_user', '=', 'users.id')
                                              -> select('Information_order.*', 'users.name')
                                              ->orderBy('id', 'desc')->get();
        // dd($information_user);  
        // dd($information_cart);                                    
        if (count($information_cart) <= 0) {
            return back();
        }
        
        $data = [
            'information_user' => $information_user,
            'information_cart' => $information_cart,
            'categories' => $categories,
        ];
        return view('thame.item.information-cart', $data);
    }

    public function getDeleteListCart($id)
    {
        $deleteListCart = InformationOrder::where('id', $id)->first();
        // dd($deleteListCart);
        if (is_null($deleteListCart)) {
            // dd('dsad');
            return back()->with('alert_error', 'Xóa đơn hàng không thành công');
        }
        $deleteListCart->delete();
            // dd('dsads');
        return back()->with('alert_error', 'Xóa đơn hàng thành công');
    }
}



















