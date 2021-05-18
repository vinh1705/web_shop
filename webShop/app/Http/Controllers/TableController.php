<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Product;
use App\Items;
use App\Item;
use Hash;
use Validator;
use App\Image;
use App\Information;
use App\GB_RAM;
use App\Colorproduct;
use App\Sale;
use App\UserCart;
use App\AdmRepUserCart;
use App\Post;
// use App\Image;

class TableController extends Controller
{
    public function getDeleteProduct($id)
    {
        $deleteProduct = Product::where('id', $id)->first();
        if (is_null($deleteProduct)) {
            return back()->with('alert_error', 'Xóa sản phẩm không thành công');
        }
        $deleteUserCartPeoduct = UserCart::where('id_product', $id)->get();
        //
        // foreach ($deleteUserCartPeoduct as $key => $value) {
        //     dd($value);
        //     if (count($value) > 1) {
        //         $deleteUserCartPeoduct->AdmRepUserCart()->delete();
        //         $value->delete();
        //     }
        // }
        $deleteProduct->UserCart()->delete();
        $deleteProduct->ColorProduct()->delete();
        $deleteProduct->GB_RAM()->delete();
        $deleteProduct->Information()->delete();
        $deleteProduct->Sale()->delete();
        $deleteProduct->Image()->delete();
        $deleteProduct->InformationOrder()->delete();
        $deleteProduct->Post()->delete();

        $deleteProduct->delete();
        return back()->with('alert_error', 'Xóa sản phẩm thành công');
    }

    public function getAddProduct($id)
    {
        $categories = Items::all();
        $company = Item::where('id_categories', $id)->get();
        if (count($company) <= 0 ) {
            return redirect('/admin');
        }
        $data = [
            'id_categories' => $id,
            'categories' => $categories,
            'company' => $company
        ];
        return view('thame.product.add-product', $data);
    }

    public function postAddProduct(Request $request, $id)
    {
        $required = "Không được để trống";
        $numeric = "Phải là số";
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            'name' =>'required',
            'editor1' => 'required',
            'status' => 'required',
            'price' => 'required|numeric',
            'technology_screen' => 'required',
            'resolution' =>'required',
            'wide_screen' => 'required',
            'chip' => 'required',
            'network' => 'required',
            'sim' => 'required',
            'weight' =>'required|numeric',
            'pin' => 'required',
            'percent' => 'required|numeric',
            'price_sale' => 'numeric',
            'gb' => 'required|numeric',
            'ram' => 'required|numeric',
            'gb_ram_price' => 'required|numeric',
            'color' => 'required',
            'color_price' => 'required|numberic',
            'sale' => 'required',
            'bao_hanh' => 'required',
        ], [
            'company.required' => 'Loại danh mục'. $required,
            'name.required' => 'Tên sản phẩm'. $required,
            'editor1.required' => 'Nội dung'. $required,
            'status.required' => 'Trạng thái'. $required,
            'price.required' => 'Giá tiền mặc định'. $required,
            'price.numeric' => 'Giá tiền mặc định'. $numeric,
            'technology_screen.required' => 'Loại màn hình'. $required,
            'resolution.required' => 'Độ phân giải màn hình'. $required,
            'wide_screen.required' => 'Kích thước màn hình'. $required,
            'chip.required' => 'Chip'. $required,
            'network.required' => 'Mạng'. $required,
            'sim.required' => 'SIM'. $required,
            'weight.required' => 'Khối lượng'. $required,
            'weight.numeric' => 'khối lượng'. $numeric,
            'pin.required' => 'Loại danh mục'. $required,
            'price_sale.numeric' => 'Giá tiền '. $numeric,
            'gb.required' => 'GB'. $required,
            'gb.numeric' => 'GB'. $numeric,
            'ram.required' => 'Ram'. $required,
            'ram.numeric' => 'Ram'. $numeric,
            'gb_ram_price.required' => 'Giá tiền của phiên bản thiết bị'. $required,
            'gb_ram_price.numeric' => 'Giá tiền của phiên bản thiết bị'. $numeric,
            'color.required' => 'Màu'. $required,
            'color_price.required' => 'Giá tiền của màu sản phẩm'. $required,
            'color_price.numeric' => 'Giá tiền của màu sản phẩm'. $numeric,
            //
        ]);
        $validator = Validator::make($request->all(), [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'image1.required' => 'Bạn chưa chọn ảnh số ',
            'image1.image' => 'Tệp không phải ảnh',
            'image1.mimes' => 'Tệp chưa đúng định dạng'
        ]);
        if (is_null(Item::where('id_categories', $id))) {
            return back()->with('error_alert','Hãng sản phẩm không tồn tại');
        }
        // dd($request->gb);
        if ($request->isMethod('post')) {
            if (is_null($request->status)) {
                return back()->with('alert_error','Bạn chưa chọn trạng thái');
            }
            if (!is_null($request->image1)) {
                $image1 = time().'.'.$request->image1->getClientOriginalName(); 
                $request->image1->move(public_path('view-thame/img'), $image1);
            }
            
            $addProduct = Product::insertGetId([
                'id_categories' => $id,
                'id_company' => $request->company,
                'img_banner' => $image1,
                'id_adm' => Auth::id(),
                'name' => $request->name,
                'post' => $request->editor1,
                'status' => $request->status,
                'price' => $request->price,
                'percent' => $request->percent,
                'price_sale' => $request->price_sale,
                'slug' => Str::slug($request->name, '-').'-'.random_int(1, 99999999999),
            ]);
            GB_RAM::insert([
                'id_product' => $addProduct,
                'gb' => $request->gb,
                'ram' => $request->ram,
                'price' => $request->gb_ram_price,
            ]);
            Colorproduct::insert([
                'id_product' => $addProduct,
                'color_product' => $request->color,
                'price' => $request->color_price,
            ]);
            Sale::insert([
                'id_product' => $addProduct,
                'sale' => $request->sale,
                'bao_hanh' => $request->bao_hanh
            ]);
            Information::insert([
                'id_product' => $addProduct,
                'technology_screen' => $request->technology_screen,
                'resolution' => $request->resolution,
                'wide_screen' => $request->wide_screen,
                'chip' => $request->chip,
                'network' => $request->network,
                'sim' => $request->sim,
                'weight' => $request->weight,
                'pin' => $request->pin
            ]);
            // dd($request->image);
            if (!is_null($request->image)) {
                foreach($request->image as $key=>$value) {
                    if(!is_null($value)) {
                        $image = time().'.'.$value->getClientOriginalName(); 
                        $value->move(public_path('view-thame/img'), $image);
                        Image::insert([
                            'id_product' => $addProduct,
                            'image' => $image
                        ]);
                    }
                }
            }
            return redirect()->route('Manager')->with('alert_success','Thêm sản phẩm thành công');
        }
    }

    public function getEditProduct($id, $slug)
    {
        $categories = Items::all();
        $editProduct = Product::where('id', $id)->first();
        $information_product_edit = Information::where('id_product', $id)->first();
        $gb_ram_product_edit = GB_RAM::where('id_product', $id)->first();
        $color_product_edit = ColorProduct::where('id_product', $id)->first();
        $sale = Sale::where('id_product', $id)->first();
        // dd($information_product_edit);
        // $sale = 
        if (is_null($editProduct)) {
            return redirect()->back()->with('alert_error','Sản phẩm không tồn tại');
        }
        $data = [
            'sale' => $sale,
            'color_product_edit' => $color_product_edit,
            'gb_ram_product_edit' => $gb_ram_product_edit,
            'information_product_edit' => $information_product_edit,
            'categories' => $categories,
            'editProduct' => $editProduct
        ];
        return view('thame.product.edit-product', $data);
    }

    public function postEditProduct(Request $request, $slug, $id)
    {
        // dd($slug);
        if (is_null($slug)) {
           return back()->with('alert_error', 'Sản phẩm không tồn tại');
        }
        
        $required = "Không được để trống";
        $numeric = "Phải là số";
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'editor1' => 'required',
            'status' => 'required',
            'price' => 'required|numeric',
        ], [
            'name.required' => 'Tên sản phẩm'. $required,
            'editor1.required' => 'Nội dung'. $required,
            'status.required' => 'Trạng thái'. $required,
            'price.required' => 'Giá tiền mặc định'. $required,
            'price.numeric' => 'Giá tiền mặc định'. $numeric,
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        if (is_null($request->image1)) {
            return back()->with('alert_error', 'Ảnh sản phẩm không được để trống');
        }
        $image1 = time().'.'.$request->image1->getClientOriginalName();
        $srcImg = $request->image1->move(public_path('view-thame/img'), $image1);
        $updateProduct = Product::where('slug', $slug)->update([
            'name' => $request->name,
            'post'=>$request->editor1,
            'status' => $request->status,
            'img_banner' => $image1,
            'price' => $request->price,
            'percent' => $request->percent,
            'price_sale' => $request->price_sale
        ]);
        $update_information = Information::where('id_product', $id)->update([
            'id_product' => $id,
            'technology_screen' => $request->technogogy_screen,
            'resolution' => $request->resolution,
            'wide_screen' => $request->wide_screen,
            'chip' => $request->chip,
            'network' => $request->network,
            'sim' => $request->sim,
            'weight' => $request->weight,
            'pin' => $request->pin,
        ]);
        $updateGB_RAM = GB_RAM::where('id_product', $id)->update([
            'id_product' => $id,
            'gb' => $request->gb,
            'ram' => $request->ram,
            'price' => $request->gb_ram_price,
        ]);
        $update_color_product = ColorProduct::where('id_product', $id)->update([
            'id_product' => $id,
            'color_product' => $request->color,
            'price' => $request->color_price,
        ]);
        $update_color_product = Sale::where('id_product', $id)->update([
            'id_product' => $id,
            'sale' => $request->sale,
            'bao_hanh' => $request->bao_hanh,
        ]);
        if (!is_null($request->image)) {
            foreach($request->image as $key=>$value) {
                if(!is_null($value)) {
                    $image = time().'.'.$value->getClientOriginalName(); 
                    $value->move(public_path('view-thame/img'), $image);
                    Image::where('id_product', $id)->update([
                        'id_product' => $id,
                        'image' => $image
                    ]);
                }
            }
        }
        return redirect()->route('Manager')->with('alert_success', 'Sửa sản phẩm thành công');
    }
}
