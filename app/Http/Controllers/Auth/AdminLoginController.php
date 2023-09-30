<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{   
    // Chama middleware admin //
    public function __construct() {
        $this->middleware('guest:admin');
    }

    // Funcao de login // 
    public function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password];

        $authOK = Auth::guard('admin')->attempt($credentials, $request->remember);

        if ($authOK) {
            return redirect()->intended(route('admin-home'));
        } else {
            return redirect()->back()->withInputs($request->only('email', 'remember'));
        }
        
    }

    // View de Login //
    public function index() {
        return view('auth.admin-login');
    }
}
