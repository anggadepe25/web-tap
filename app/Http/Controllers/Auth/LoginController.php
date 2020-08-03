<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showFormLogin(){
        return view('auth_admin.login');
    }

    public function login(Request $request)
    {
        $validasi = [
            'email' => 'required|string',
            'password' => 'required|string|min:5'
        ];

        $message = [
            'required' => ':Attribute Tidak Boleh Kosong',
            'min' => ':atribute minimal :min',
        ];

        $this->validate($request, $validasi,$message);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credential, $request->remember)){
            return redirect()->intended(route('dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
