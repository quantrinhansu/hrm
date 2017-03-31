<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
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

    protected $table = "users";
    
    public function departments(){
        return $this->belongsTo('App\Department', 'department_id');
    }

    public static function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function team(){
        return $this->belongsTo('App\Team', 'team_id');
    }
}
