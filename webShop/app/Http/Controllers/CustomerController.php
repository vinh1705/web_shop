<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Items;
use App\Users;
use App\Product;
use App\UserCart;
use App\AdmRepUserCart;
use App\AdmRepUserContact;
use Validator;

class CustomerController extends Controller
{
    public function getListCustomer($id)
    {
        $categories = Items::all();
        $listProductCart = UserCart::join('product', 'user_cart.id_product', '=', 'product.id')
                        // ->join('user_cart', 'user_cart.id_categories', $id)
                        ->select('user_cart.*', 'product.name as product_name', 'product.price_sale as product_sale')
                        ->orderBy('id', 'desc')
                        ->get();
        $listProductCartCategories = UserCart::where('id_categories', $id)->get();
        // dd($listProductCartCategories);
        if(count($listProductCart) <= 0) {
            return redirect('admin');
        }
        
        $data = [
            'listProductCart' => $listProductCart,
            'categories' => $categories,
        ];
        return view('thame.customer.list-customer', $data);
    }

    public function getFeedBad($id)
    {
        $categories = Items::all();
        $information_customer = UserCart::where('id', $id)->first();
        if (is_null($information_customer)) {
            return back();
        }
        $data = [
            'id_customer' => $id,
            'information_customer' => $information_customer,
            'categories' => $categories,
        ];
        return view('thame.mailbox.compose', $data);
    }

    public function postFeedBad(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'feedbad' => 'required',
        ], [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên quá dài',
            'feedbad.required' => 'Email không được để trống',
        ]);
        
            if ($validator->fails()) {
                return redirect('/new-acction')
                            ->withErrors($validator)
                            ->withInput();
            }
            if (!is_null($id) && is_numeric($id)) {
                $feedbad = AdmRepUserCart::insert([
                    'id_user_cart' => $id,
                    'name' => $request->name,
                    'comment' => $request->feedbad
                ]);
                if ($feedbad == false) {
                    return back()->with('alert_error', 'Khách hàng không tồn tại');
                }
                if($feedbad == true){
                    $categories = Items::all();
                    $data = [
                        'categories' => $categories,
                    ];
                    return redirect()->route('MaiBox')->with('alert_success', 'Thư được gửi đi thành công');
                }
            }return back()->with('alert_error', 'Khánh hàng không tồn tại');
    }

    public function getDeleteCustomer($id)
    {
        $delete_customer = UserCart::where('id', $id)->first();
        if (is_null($delete_customer)) {
            return back('alert_error', 'Xóa khách hàng không thành công');
        }
        $delete_customer->AdmRepUserCart()->delete();
        $delete_customer->delete();
        return back()->with('alert_success', 'Xóa khách hàng thành công');
    }

    public function getFeedBadNoneUser()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories,
        ];
        return view('thame.mailbox.compese-new', $data);
    }

    public function postFeedBadAdmNew(Request $request)
    {
        $id_user_cart = UserCart::where('email', $request->email)->first();
        if (!is_null($id_user_cart)) {
            AdmRepUserContact::insert([
                'id_user_cart' => $id_user_cart->id,
                'name_adm' => $request->name,
                'comment' => $request->feedbad,
            ]);
            return redirect()->route('')->with('alert_success', 'Gửi thư thành công');
        }else {
            return back()->with('alert_error', 'Sai địa chỉ email');
        }
    }
}
