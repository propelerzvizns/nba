<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
           
        }
        return redirect('/registration');

    }


    public function logout(){
        auth()->logout();
        return redirect('/login');


    } 

 

}
