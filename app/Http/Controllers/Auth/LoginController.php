<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(HttpRequest $request)
    {
        // dd($request->remember);
        $this->validate($request, [
            'username' => ['required', 'max:255'],
            'password' => 'required',

        ]);
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'phonenumber';
        if (!Auth::attempt([$fieldType => $request->username, 'password' => $request->password], $request->remember)) {
            
            return redirect()->back()->with('status', "Invalid Login Details");
        }
       return redirect()->to('dashboard');
    }
}
