<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;

class loginController extends Controller
{
    //
    use AuthenticatesUsers;
    protected $guard='adminMiddle';
    protected $redirectTo='admin/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function guard(){
        return auth()->guard('adminMiddle');
    }
    public function loginform(){
        if(auth()->guard('adminMiddle')->user()){
            return back();
        }
        return view('back.auth.login');
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(auth()->guard('adminMiddle')->attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            \Session::flush();
            \Session::put('succes','Anda berhasil login!');
            return redirect()->route('admin/home');
        } else {
            return back()->with('error','email atau password salah!');
        }
    }

    public function logout(Request $request)
    {
        auth()->guard('adminMiddle')->logout();
        \Session::flush();
        \Session::put('succes','Anda berhasil logout!');
        return redirect(url('admin/login'));
    }
}
