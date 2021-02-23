<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Follow;

class UserController extends Controller
{
  public function userGetData($user_id){
    $data = [];
    $user = User::findorfail($user_id);
    $data['user'] = $user;
    return response()->json($data);
  }

  public function followUser($auth_id, $user_id){
    $follow = Follow::create([
        'auth_id' => $auth_id,
        'user_id' => $user_id,
    ]);
    return json_encode('followed');
  }

  public function unfollowUser($auth_id, $user_id){
    $follow = Follow::where(['user_id' => $user_id, 'auth_id' => $auth_id ]);
    $follow->delete();
    return json_encode('unfollowed');
  }
}
