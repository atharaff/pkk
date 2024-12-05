<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Broadcasting\Broadcasters\UsePusherChannelConventions;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use AuthenticatesUsers;
    
    public function login()
    {
        return view('login');
    }


public function dologin(Request $request)
{
    $credential = $request->only('email', 'password');

    if (auth()->attempt($credential)) {
        return redirect("/profil");
    } else{
        return redirect()->route("login")->with("error", "email dan password tidak ditemukan di sistem");
    }
}

public function dologout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login.index')->with('success', 'Anda berhasil keluar dari sistem');
}

public function createSample()
{
    User::create([
        'name' => 'Administrator',
        'email' => 'admin@admin.com',
        'password' => bcrypt ('1234')
    ]);

    echo "User berhasil ditambahkan";
}
}