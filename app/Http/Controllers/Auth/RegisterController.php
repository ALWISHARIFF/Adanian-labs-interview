<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(HttpRequest $request)
    {
        // dd($request->only('email', 'password'));
        //validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'password' => 'required|confirmed',
            'phonenumber' => ['required', new PhoneNumber],
            'role' => 'required|max:255',
            'email' => 'required|email:rfc,dns'
        ]);

        //store
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'phonenumber' => $request->phonenumber,
            'role' => $request->role,
            'email' => $request->email,
        ]);
        //signin user
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);


        return redirect()->route('dashboard');
    }
}
