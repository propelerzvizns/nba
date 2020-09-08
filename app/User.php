<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function sendEmailReminder(Request $request, $id)
    // {
    //     $user = User::findOrFail($id);

    //     Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
    //         $m->from('hello@app.com', 'Your Application');

    //         $m->to($user->email, $user->name)->subject('Your Reminder!');
    //     });
    // }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
