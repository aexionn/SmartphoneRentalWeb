<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if($userData) {
            $userData['password'] = bcrypt($userData['password']);
            $user = User::create($userData);
            return redirect('/auth');
        } else {
            return back()->withErrors([$userData])->withInput();
        }
    }

    public function authenticate(Request $request)
    {
        $userData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($userData)) {
            $request->session()->regenerate();
            session()->put('user_signup',$userData);
            return redirect()->intended('/devices');
        }

        return back()->withErrors([
            'email' => 'Email atau Password tidak sesuai dengan record yang kami miliki',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth');
    }
}
