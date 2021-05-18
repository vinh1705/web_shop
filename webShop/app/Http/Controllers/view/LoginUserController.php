<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Users;

class LoginUserController extends Controller
{
    public function getLoginUser()
    {
        return view('thame-view.handling.login');
    }

    public function getCreateUser()
    {
        return view('thame-view.handling.register');
    }

    public function PostCreateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8'
        ], [
            'name.required' => 'Tên không được để trống',
            'name.max' => 'Tên quá dài',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Chưa nhập mật khẩu',
            'pasword.min' => 'Mật khẩu ít nhất 8 ký tự',
            'password.confirmed' => 'Nhập lại password không chính xác',
            'password_confirmation.required' => 'Chưa nhập lại mật khẩu',
            'password_confirmation.min' => 'Nhập lại mật khẩu phải trên 8 ký tự'
        ]);
        
        if ($validator->fails()) {
            return redirect('/create-user')
                        ->withErrors($validator)
                        ->withInput();
        }
        $createACconut = Users::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            return redirect()->route('LoginUser')->with('alert_error', 'Đăng ký tài khoản thành công');
    }

    public function postLoginUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8|max:100',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 8 ký tự',
            'password.max' => 'Mật khẩu tối đa 100 ký tự',
        ]);
        if ($validator->fails()) {
            return redirect('/login-user')
                        ->withErrors($validator)
                        ->withInput();
        }
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('Views')->with('alert_success', 'Đăng nhập thành công');
        }else {
            return back()->with('alert_error', 'Sai email hoặc mật khẩu');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('Views');
    }
}
