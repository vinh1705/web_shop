<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Items;
use App\Item;
use App\Product;
use app\Image;
use App\Sale;
use App\Contact;
use App\Post;
use Validator;

class ViewsController extends Controller
{
    public function getViews()
    {
        $categories = Items::all();
        $id_phone = Items::where('id', 1)->first();
        $id_laptop = Items::where('id', 2)->first();
        $id_table = Items::where('id', 3)->first();
        $id_clock = Items::where('id', 5)->first();
        $post = Post::orderBy('id', 'desc')->limit(3)->get();
        $phone = Product::where('id_categories', $id_phone->id)->limit(8)->orderBy('id', 'desc')->get();
        $laptop = Product::where('id_categories', $id_laptop->id)->limit(8)->get();
        $table = Product::where('id_categories', $id_table->id)->limit(8)->get();
        $clock = Product::where('id_categories', $id_clock->id)->limit(8)->get();
        $data = [
            'post' => $post,
            'clock' => $clock,
            'id_clock' => $id_clock,
            'id_phone' => $id_phone,
            'id_laptop' => $id_laptop,
            'id_table' => $id_table,
            'phone' => $phone,
            'laptop' => $laptop,
            'table' => $table,
            'categories' => $categories
        ];
        return view('thame-view.index', $data);
    }

    public function getListProduct($id)
    {
        $categories = Items::all();
        $categories_first = Items::where('id', $id)->first();
        $company = Item::where('id_categories', $id)->get();
        $list_product = Product::where('id_categories', $id)->limit(40)->get();
        $data = [
            'categories_first' => $categories_first,
            'company' => $company,
            'list_product' => $list_product,
            'categories' => $categories
        ];
        if (is_null($categories_first)) {
            return redirect()->route('Views');
        }
        return view('thame-view.list-product.list-product', $data);
    }

    public function getContact()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame-view.me.contact', $data);
    }

    public function postContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' =>'required',
            'editor1' => 'required',
        ], [
            'email.required' => 'Email không được để trống',
            'name.required' => 'Tên không được để trống',
            'editor1.required' => 'Không được để trống nội dung',
            'email.email' => 'Email không đúng định dạng',
        ]);
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        $slug_contact = Str::slug($request->name, '-').'-'.random_int(1, 9999999999999);
        $contact = Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'categories_contact' => $request->categories_contact,
            'conmment' => $request->editor1,
            'slug' => $slug_contact
        ]);
        return redirect()->route('Views')->with('alert_success', 'Gửi báo cáo thành công');
    }
}



















