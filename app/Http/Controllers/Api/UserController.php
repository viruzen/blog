<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

  public function getFollowList($user_id,$auth_id){
    $data = [];
    $users = [];
    $follow = Follow::where('user_id',$user_id)->get();
    $data['follow'] = $follow;
    foreach ($follow as $key => $value) {
      $auth_user = User::find($value->auth_id);
      $image = $auth_user->image;
      if(!empty($image)){
        $image->url = 'http://localhost/blog/public/'.$image->url;
      }
      $isFollow = Follow::where(['user_id' => $value->auth_id, 'auth_id' => $auth_id ])->count();
      $users[$key] = $auth_user;
      $users[$key]->post_count = $auth_user->blogs->count();
      $users[$key]->follow_count =  Follow::where(['user_id' => $auth_user->id ])->count();
      $users[$key]->isFollow = $isFollow;

    }
    $data['users'] = $users;
    return $data;
  }

  public function getFollowingList($user_id,$auth_id){
    $data = [];
    $users = [];
    $follow = Follow::where('auth_id',$user_id)->get();
    $data['follow'] = $follow;
    foreach ($follow as $key => $value) {
      $auth_user = User::find($value->user_id);
      $image = $auth_user->image;
      if(!empty($image)){
        $image->url = 'http://localhost/blog/public/'.$image->url;
      }
      $isFollow = Follow::where(['user_id' => $value->user_id, 'auth_id' => $auth_id ])->count();
      $users[$key] = $auth_user;
      $users[$key]->post_count = $auth_user->blogs->count();
      $users[$key]->follow_count =  Follow::where(['user_id' => $auth_user->id ])->count();
      $users[$key]->isFollow = $isFollow;

    }
    $data['users'] = $users;
    return $data;
  }
}
