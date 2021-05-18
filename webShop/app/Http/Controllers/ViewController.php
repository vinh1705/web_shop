<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Items;
use App\Item;
use App\Contact;
use App\AdmRepUserContact;
use App\UserCart;

class ViewController extends Controller
{
    public function getIndex()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.index', $data);
    }

    public function getWidgets()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.widgets', $data);
    }
    
    public function getButtons()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.Buttons', $data);
    }

    public function getGeneral()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.Ribbons', $data);
    }

    public function getTimeline()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.timeline', $data);
    }

    public function getIcons()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.icons', $data);
    }

    public function getNavbar()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.Navbar', $data);
    }

    public function getRibbons()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.ui.Timeline', $data);
    }

    public function getAdvanced()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame.form.advanced', $data);
    }

    public function getValidation()
    {
        $categories = Items::all();

        $data = [
            'categories' => $categories
        ];
        return view('thame.form.validation', $data);
    }

    public function getMailBox()
    {
        $contact = Contact::limit(20)->OrderBy('id', 'desc')->get();
        $categories = Items::all();
        $data = [
            'contact' => $contact,
            'categories' => $categories
        ];
        return view('thame.mailbox.mailbox', $data);
    }

    public function getReadMail($slug)
    {
        $contact_user = Contact::where('slug', $slug)->first();
        if (is_null($contact_user)) {
            return back();
        }
        $categories = Items::all();
        $data = [
            'contact_user' => $contact_user,
            'categories' => $categories
        ];
        return view('thame.mailbox.read-mail', $data);
    }

    public function getAboutUs()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame-view.me.about-us', $data);
    }

    // public function getAddress()
    // {
    //     $categories = Items::all();
    //     $data = [
    //         'categories' => $categories
    //     ];
    //     return view('thame-view.me.address', $data);
    // }

    public function getSearchProduct()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame-view.me.search-cart', $data);
    }

    public function getBaoHanh()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories
        ];
        return view('thame-view.me.bao-hanh', $data);
    }

    public function getManager()
    {
        if(is_null(Auth::id())){
            return back()->with('alert_error', 'Bạn chưa đăng nhập');
        }
        $product = Product::where('id_adm', Auth::id())->orderBy('id','desc')->get();
        $categories = Items::all();
        $data = [
            'categories' => $categories,
            'products' => $product
        ];
        return view('thame.product.item-product', $data);
    }

    public function getManagerID($id)
    {
        if(is_null($id)){
            return back()->with('alert_error', 'Danh mục không tồn tại');
        }
        $product = Product::where('id_categories',$id)->orderBy('id','desc')->get();
        $categories = Items::all();
        $data = [
            'categories' => $categories,
            'products' => $product
        ];
        return view('thame.product.item-product', $data);
    }

    public function getCompony($id)
    {
        if (is_null($id)) {
            return back();
        }
        $categories = Items::all();
        $product = Product::where('id_categories', $id)->get();
        $data = [
            'products' => $product,
            'categories' => $categories,
        ];
        return view('thame.product.compony-product', $data);
    }

    public function getDeleteContactMail($slug)
    {
        $delete_contact = Contact::where('slug', $slug)->first();
        if (is_null($delete_contact)) {
            return back('MaiBox')->with('alert_success', 'Xóa thư không thành công');
        }
        $delete_contact->delete();
        return redirect()->route('MaiBox')->with('alert_success', 'Xóa thư thành công');
    }

    public function getSentMessager()
    {
        $contact = AdmRepUserContact::orderBy('id','desc')->get();
        $categories = Items::all();
        // dd($contact);
        $data = [
            'categories' => $categories,
            'contact' => $contact
        ];
        // dd($contact);
        return view('thame.mailbox.sent-messager', $data);
    }

    public function getAdmRepUserContact($id)
    {
        $contact_user = AdmRepUserContact::where('id', $id)->first();
        $categories = Items::all();
        $user_cart = UserCart::where('id', $contact_user->id_user_cart)->first();
        // dd($contact_user);
        $data = [
            'user_cart' => $user_cart,
            'categories' => $categories,
            'contact_user' => $contact_user
        ];
        return view('thame.mailbox.adm-rep-user-contact', $data);
    }
}


















