<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\loginRequest;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->modelName = new login();
    }
    public function login()
    {
        return view('pages.login');
    }

    public function login_check(loginRequest $request)
    {
        $validated = $request->validated();

        $adminUsername =  $this->modelName::where('username', '=', $validated['username'])->first();
        $adminPassword =  $this->modelName::where('password', '=', $validated['password'])->first();

        if ($adminUsername) {
            //check password
            if ($adminPassword) {
                $request->session()->put('loggedAdmin', $adminUsername->id);
                return redirect()->route('dashboard')->withSuccessMessage('Welcome Admin');
            } else {
                return back()->with('error' , 'Incorrect password');
            }
        } else {
            return back()->with('error' , 'Invalid account');
        }
    }

    public function logout_admin()
    {
        if (session()->has('loggedAdmin')) {
            session()->pull('loggedAdmin');
            return redirect()->route('login');
        }
    }
}
