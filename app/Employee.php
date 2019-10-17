<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\ClientRecord;

class Employee extends Model
{
  protected $fillable = [
      'employeeID', 'first_name', 'last_name', 'email', 'phone', 'user_id', 'designation'
  ];

  public function user(){

  	return $this->belongsTo(User::class);
  }

  public function ClientRecords(){
  	return $this->hasMany(ClientRecord::class);
  }


}
