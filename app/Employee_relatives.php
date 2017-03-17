<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_relatives extends Model
{
    protected $table = "employee_relatives";

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
