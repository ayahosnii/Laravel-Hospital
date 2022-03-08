<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function adminLogin()
    {
        return view('auth.admin.login');
    }

    public function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input('password')], $remember_me)) {
            //notify()->success('تم الدخول بنجاح');
            return redirect() -> route('admin.dashboard');
        }

        //notify()->error('خطأ في البيانات برحاء المحاولة مجددا');
        return redirect()->back()->with(['error' => 'هناك خطأ بالبيانات']);
    }
}
