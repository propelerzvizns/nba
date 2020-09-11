<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Mail\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('login.registration');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:8',
            'password_confirm' => 'required|same:password'
        ]);
        $hashed = Hash::make($data['password']);
        $data['password'] = $hashed;
        $user =  User::create($data);
        Mail::to($user)->send(new Verification($user));




        // Mail::to($request->user())->send('sdasdsad');


        // return redirect('/');

    }

        public function verifyUser($id) {
            $user = User::findOrFail($id);
            $user->email_verified_at = new Carbon;
            $user->save();
            return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
