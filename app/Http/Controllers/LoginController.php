<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login.login');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);
        $user = User::where('email', $request->email)->first();

        if ($user->email_verified_at != null) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('/');

            }
        }
        return view('/login/login-failed');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }

}
