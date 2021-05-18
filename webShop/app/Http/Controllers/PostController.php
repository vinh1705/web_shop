<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Items;
use App\Product;
use App\Item;
use App\Post;
use Cart;

class PostController extends Controller
{
    public function getAddPost($id)
    {
        // dd('das');
        $categories = Items::all();
        $list_product = Product::where('id_categories', $id)->get();
        $data = [
            'id_categories' => $id, 
            'list_product' => $list_product,
            'categories' => $categories
        ];
        return view('thame.post.add-post', $data);
    }

    public function postAddPost(Request $request, $id_categories)
    {
        $required = "Không được để trống";
        $numeric = "Phải là số";
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            'title' =>'required',
            'editor1' => 'required'
        ], [
            'company.required' => 'Loại danh mục'. $required,
            'title.required' => 'Tên sản phẩm'. $required,
            'editor1.required' => 'Nội dung'. $required,
            //
        ]);
        $validator = Validator::make($request->all(), [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'image1.required' => 'Bạn chưa chọn ảnh',
            'image1.image' => 'Tệp không phải ảnh',
            'image1.mimes' => 'Tệp chưa đúng định dạng'
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->route('AddPost',$id_categories)
                        ->withErrors($validator)
                        ->withInput();
        }
        if (is_null(Product::where('id', $request->list_product))) {
            // dd('no');
            return back()->with('error_alert','Hãng sản phẩm không tồn tại');
        }
        if ($request->isMethod('post')) {
            if (!is_null($request->image1)) {
                $image1 = time().'.'.$request->image1->getClientOriginalName(); 
                // dd($image1);
                $request->image1->move(public_path('view-thame/img'), $image1);
            }
            // dd($request->image1);
            $addPost = Post::insert([
                'id_product' => $request->list_product,
                'slug' => Str::slug($request->title, '-').'-'.random_int(0, 99999999999),
                'id_categories' => $id_categories,
                'id_admin' => Auth::id(),
                'title' => $request->title,
                'content' => $request->editor1,
                'img_banner' => $image1,
            ]);
            return redirect()->route('ListPost', 1);
        }
    }
    public function getListPost($id_categories)
    {
        $categories = Items::all();
        $list_post = Post::where('id_categories', $id_categories)->orderBy('id', 'desc')->get();
        $list_name_admin = Post::join('users', 'post.id_admin', '=', 'users.id')
                                // ->join('item_categories', 'post.id_categories', '=', 'item_categories.id')
                                ->select('post.*', 'users.name as name_adm')
                                ->orderBy('id', 'desc')
                                ->get();
        $data = [
            'list_post' => $list_post, 
            'list_name_admin' => $list_name_admin,
            'categories' => $categories
        ];
        return view('thame.post.list-post', $data);
    }

    public function getDeletePost($id_post)
    {
        $delete_post = Post::where('id', $id_post)->first();
        if (is_null($delete_post)) {
            return back()->with('alert_error', 'Xóa bài viết không thành công');
        }
        $delete_post->delete();
        return back()->with('alert_success', 'Xóa bài viết thành công');
    }

    public function getEditPost($id)
    {
        $categories = Items::all();
        $edit_post = Post::where('id', $id)->first();
        if (is_null($edit_post)) {
            return redirect()->route('ListPost', 1)->with('alert_error', 'Bài viết không tồn tại');
        }
        $list_product = Product::where('id_categories', $edit_post->id_categories)->get();
        if (is_null($edit_post)) {
            return redirect('/admin/post/list-post/1');
        }
        
        $data = [
            'id_post' => $id,
            'list_product' => $list_product,
            'edit_post' => $edit_post,
            'categories' => $categories
        ];
        return view('thame-view.post.edit-post', $data);
    }

    public function postEditPost(Request $request, $id_post)
    {
        $required = "Không được để trống";
        $numeric = "Phải là số";
        $validator = Validator::make($request->all(), [
            'company' => 'required',
            'title' =>'required',
            'editor1' => 'required'
        ], [
            'company.required' => 'Loại danh mục'. $required,
            'title.required' => 'Tên sản phẩm'. $required,
            'editor1.required' => 'Nội dung'. $required,
            //
        ]);
        $validator = Validator::make($request->all(), [
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'image1.required' => 'Bạn chưa chọn ảnh',
            'image1.image' => 'Tệp không phải ảnh',
            'image1.mimes' => 'Tệp chưa đúng định dạng'
        ]);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
            if (is_null(Product::where('id', $request->list_product))) {
                return back()->with('error_alert','Hãng sản phẩm không tồn tại');
            }
            if ($request->isMethod('post')) {
                if (!is_null($request->image1)) {
                    $image1 = time().'.'.$request->image1->getClientOriginalName(); 
                    $request->image1->move(public_path('view-thame/img'), $image1);
                }
            $edit_post = Post::where('id', $id_post)->first();
            if (is_null($edit_post)) {
                return back()->with('alert_error','Sửa bài viết không thành công');
            }
            $edit_post->update([
                'slug' => Str::slug($request->title, '-').'-'.random_int(0, 99999999999),
                'id_product' => $request->list_product,
                'id_admin' => Auth::id(),
                'title' => $request->title,
                'content' => $request->editor1,
                'img_banner' => $image1,
            ]);
                return redirect()->route('ListPost', 1)->with('alert_success', 'Sửa sản phẩm thành công');
        }
    }
}