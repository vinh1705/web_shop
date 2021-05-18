<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Users;


class LoginController extends Controller
{
    public function getLogin()
    {
        return view('thame.handling.login')->with('alert_erorr', 'Đăng nhập để dùng các chức năng admin');
    }

    public function getNewAcction()
    {
        return view('thame.handling.register');
    }

    public function postNewAcction(Request $request)
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
            'password_confirmation.min' => 'Nhập lạ mật khẩu phải trên 8 ký tự'
        ]);
        
        if ($validator->fails()) {
            return redirect('/new-acction')
                        ->withErrors($validator)
                        ->withInput();
        }
        $createACconut = Users::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
            return redirect()->route('Login')->with('alert_error', 'Đăng ký tài khoản thành công');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Chưa nhập mật khẩu',
            'pasword.min' => 'Mật khẩu ít nhất 8 ký tự',
        ]);
        if ($validator->fails()) {
            return redirect('/login')
                        ->withErrors($validator)
                        ->withInput();
        }
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('Index')->with('alert_success', 'Đăng nhập thành công');
        }else {
            return back()->with('alert_error', 'Sai email hoặc mật khẩu');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('Login')->with('alert_erorr', 'Vui lòng đăng nhập trước khi truy cập vào trang admin');
    }
}
