<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
  protected $fillable = [
      'auth_id', 'user_id',
  ];

  public function user(){
    return $this->belongsTo(User::class);
  }
}
