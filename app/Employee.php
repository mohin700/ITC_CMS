<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Employee extends Model
{
  protected $fillable = [
      'employeeID', 'first_name', 'last_name', 'email', 'phone', 'user_id', 'designation'
  ];

  public function user(){

  	return $this->belongsTo(User::class);
  }
}
