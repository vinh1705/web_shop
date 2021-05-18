<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Items;
use App\Product;
use App\Image;
use App\Information;
use App\ColorProduct;
use App\GB_RAM;
use App\City\CityVN;
use App\City\DistrictVN;
use App\City\CommuneVN;
use App\Users;
use App\Sale;
use App\Order;
use App\UserCart;
use App\AdmRepUserCart;
use Validator;
use N2W;
use App\Post;
use App\InformationOrder;

class InformationController extends Controller
{
    public function getInformation($id, $slug, $id_pr)
    {
        $categories = Items::all();
        $gb_ram = GB_RAM::where('id_product', $id_pr)->get();
        $product_information = Product::where('slug', $slug)->first();
        $image_product = Image::where('id_product', $id_pr)->get();
        $information_product = Information::where('id_product', $id_pr)->first();
        $color_product = ColorProduct::where('id_product', $id_pr)->get();
        $categories_product_offer = Product::where('id_categories', $id)->limit(5)->orderBy('id', 'desc')->get();
        $sale_product = Sale::where('id_product', $id_pr)->get();
        $gb_ram_infomation = GB_RAM::where('id_product', $id_pr)->first();
        $post_product = Post::where('id_product', $id_pr)->orderBy('id', 'desc')->limit(3)->get();
        $categories_post = Items::where('id', $id)->first();
        if (count($categories_product_offer) <= 0) {
            return back();
        }
        if(!is_null($product_information) && !is_null($information_product) && !is_null($gb_ram_infomation)){
            $data = [
                'categories_post' => $categories_post,
                'post_product' => $post_product,
                'gb_ram_infomation' => $gb_ram_infomation,
                'sale_product' => $sale_product,
                'gb_ram' => $gb_ram,
                'id_categories' => $id,
                'categories_product_offer' => $categories_product_offer,
                'color_product' => $color_product,
                'information_product' => $information_product,
                'image_product' => $image_product,
                'categories' => $categories,
                'product_information' => $product_information
            ];
            return view('thame-view.manager-product.e-commerce', $data);
        }
            
            return redirect()->back();
    }

    public function getCart($id_categories, $id, $slug)
    {
        $categories = Items::all();
        $cityVN = cityVN::all();
        $District = DistrictVN::all();
        $CommuneVN = CommuneVN::all();
        // $District = DistrictVN::where('matp', $request->SystemCityID)->get();
        // $District = CommuneVN::where('maqh', $request->SystemDistrictID)->get();
        $product_cart = Product::where('id', $id)->first();
        $id_categories = $id_categories;
        $id_pr = $id;
        $slug = $slug;
        $data = [
            'id_categories' => $id_categories,
            'id_pr' => $id_pr,
            'slug' => $slug,
            'cityVN' => $cityVN,
            'District' => $District,
            'CommuneVN' => $CommuneVN,
            'product_cart' => $product_cart,
            'categories' => $categories,
        ];
        return view('thame-view.order.order-product' ,$data);
    }

    public function postXacNhanDonHang(Request $request, $id_categories, $id, $slug)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'Phone' => 'required',
            'SystemCityID' => 'required',
            'SystemDistrictID' => 'required',
            'Address' => 'required',
            'Email' => 'required|Email',
        ], [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên quá dài',
            'Phone.required' => 'Số điện thoại không được để trống',
            'SystemCityID.required' => 'Tỉnh không được để trống',
            'SystemDistrictID.required' => 'Quận huyện không được để trống',
            'Address.required' => 'Địa chỉ không được để trống',
            'Email.required' => 'Email không được để trống',
            'Email.email' => 'Email không đúng định dạng',
        ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }
        $categories = Items::all();
        $name_user = $request->name;
        $email_user = $request->Email;
        $note_user = $request->Note;
        $phone_user = $request->Phone;
        $SystemCityID = $request->SystemCityID;
        $SystemDistrictID = $request->SystemDistrictID;
        $address = $request->Address;
        $id_categories = $id_categories;
        $id_pr = $id;
        $slug = $slug;
        $product_cart = Product::where('slug', $slug)->where('id', $id)->first();
        $id_cart = Str::random(15);
        $orderUser = UserCart::insert([
            'id_product' => $id,
            'id_categories' => $id_categories, 
            'id_user' => Auth::id(), 
            'name' => $request->name,
            'phone' => $request->Phone,
            'id_matp' => $request->SystemCityID,
            'id_maqh' => $request->SystemDistrictID,
            'email' => $request->Email,
            'address' => $request->Address,
            'note' => $request->Note,
            'id_cart' => $id_cart,
        ]);
        // dd($orderUser);
        $information_order = InformationOrder::insert([
            'id_cart' => $id_cart,
            'id_product' => $id,
            'id_user' => Auth::id(),
            'status' => 1,
            'note' => $request->Note,
        ]);
        $data = [
            'id_cart' => $id_cart,
            'categories' => $categories,
            'id_categories' => $id_categories,
            'id_pr' => $id_pr,
            'slug' => $slug,
            'name_user' => $name_user,
            'email_user' => $email_user,
            'note_user' => $note_user,
            'phone_user' => $phone_user,
            'SystemCityID' => $SystemCityID,
            'SystemDistrictID' => $SystemDistrictID,
            'address' => $address,
            'product_cart' => $product_cart
            
        ];
        return view('thame-view.order.xac-nhan-don-hang' ,$data);
    }

    public function getCartSuccess(Request $request, $id_cart)
    {
        $categories = Items::all();
        $data = [
            'id_cart' => $id_cart,
            'categories' => $categories,
        ];
        return view('thame-view.order.order-success', $data);
    }

    public function getSearchCart()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories,
        ];
        return view('thame-view.order.search-cart', $data);
    }

    public function postSearchCart(Request $request)
    {
        $IdOrder = UserCart::where('id_cart', $request->OrderID)->first();
        if (is_null($IdOrder)) {
            return back()->with('alert_error', 'Đơn hàng không tồn tại');
        }
        $product_cart = Product::where('id', $IdOrder->id_product)->first();
        $gb_ram_cart = GB_RAM::where('id_product', $IdOrder->id_product)->first();
        $color_product_cart = ColorProduct::where('id_product', $IdOrder->id_product)->first();
        $adm_rep_user_cart = AdmRepUserCart::where('id_user_cart', $IdOrder->id)->first();
        // dd($adm_rep_user_cart);
        $categories = Items::all();
        $data = [
            'adm_rep_user_cart' => $adm_rep_user_cart,
            'color_product_cart' => $color_product_cart,
            'gb_ram_cart' => $gb_ram_cart,
            'product_cart' => $product_cart,
            'id_cart' => $request->OrderID,
            'id_order' => $IdOrder,
            'categories' => $categories,
        ];
        return view('thame-view.order.information-cart', $data);
    }

    public function postSearchProduct(Request $request)
    {
        $categories = Items::all();
        $searchProduct = Product::where('name', 'LIKE', '%' .$request->search_product. '%')->limit(15)->get();
        $data = [
            'categories_first' => $request->search_product,
            'categories' => $categories,
            'list_product' => $searchProduct,
        ];
        return view('thame-view.list-product.list-search', $data);
    }

    public function getAddToCart()
    {
        $categories = Items::all();
        $data = [
            'categories' => $categories,
        ];
        return view('thame-view.order.list-cart', $data);
    }

    public function getCompare($id_compare_product, $id_product_compare, $slug, $slug_product_cpmpare)
    {
        $categories = Items::all();
        $product_compare = Product::where('slug', $slug)->first();
        $compare_product = Product::where('slug', $slug_product_cpmpare)->first();
        $information_compare = Information::where('id_product', $id_compare_product)->first();
        $compare_information = Information::where('id_product', $id_product_compare)->first();
        $sale_compare_product = Sale::where('id_product', $id_compare_product)->get();
        $sale_product_compare = Sale::where('id_product', $id_product_compare)->get();
        $information_gb_ram_comnpare = GB_RAM::where('id_product', $id_compare_product)->first();
        $information_compare_gb_ram= GB_RAM::where('id_product', $id_product_compare)->first();
        $data = [
            'id_compare_product' => $id_compare_product, // Id của sản phẩm A
            'id_product_compare' => $id_product_compare, // Id của sản phẩm B

            'slug' => $slug, // Slug của sản phẩm A
            'slug_product_cpmpare' => $slug_product_cpmpare, // slug của sảm phẩm B

            'information_gb_ram_comnpare' => $information_gb_ram_comnpare, // Lấy GB và Ram để của sản phẩm A
            'information_compare_gb_ram' => $information_compare_gb_ram, // Lấy GB và Ram của sản phẩm B

            'information_compare' => $information_compare, // Thông tin của sản phẩm A
            'compare_information' => $compare_information, //Thông tin của sản phẩm B

            'sale_compare_product' => $sale_compare_product, // Thông tin của sản phẩm A
            'sale_product_compare' => $sale_product_compare, // Thông tin của sản phẩm B
            
            'product_compare' => $product_compare, // Lấy thông tin cơ bản của sản phẩm  A
            'compare_product' => $compare_product, // Lấy thông tin cơ bản của sản phẩm B

            'categories' => $categories, // Lấy danh mục sản phẩm
        ];
        // dd($information_compare);
        if (is_null($information_compare) || is_null($compare_information)) {
            return redirect()->route('CompareOne');
        }
        return view('thame-view.manager-product.compare', $data);
    }

    public function getCompareOne($id, $slug)
    {
        $product_compare_add = Product::where('slug', $slug)->first();
        $information_add_one = Information::where('id_product', $id)->first();
        $gb_ram_add_one = GB_RAM::where('id_product', $id)->get();
        $color_add_one = ColorProduct::where('id_product', $id)->get();
        $sale_add_one = Sale::where('id_product', $id)->get();
        $categories = Items::all();

        $data = [
            'product_compare_add' => $product_compare_add,
            'information_add_one' => $information_add_one,
            'gb_ram_add_one' => $gb_ram_add_one,
            'color_add_one' => $color_add_one,
            'sale_add_one' => $sale_add_one,
            'categories' => $categories,
        ];
        return view('thame-view.manager-product.compare-one', $data);
    }

    public function getCompareSearch(Request $request)
    {
        if ($request->ajax()) {
            $data_compare = '';
            $compare_product = Product::where('name', 'LIKE', '%' .$request->compare_search. '%')->orderBy('id', 'desc')->get();
            if (count($compare_product) > 0) {
                foreach ($compare_product as $key => $value) {
                    $data_compare .= 
                    "<tr>
                        <td><img style='width: 35%;' src='".asset('view-thame/img/'.$value->img_banner)."></td>
                        <td>".$value->name."</td>
                        <td>".$value->price_sale."</td>
                    </tr>";
                }
                $data = [
                    'table_product_compare' => $data_compare,
                    'search_product_compare' => $compare_product
                ];
                return response()->json($data);
            }
            return back();
        }
    }
}
