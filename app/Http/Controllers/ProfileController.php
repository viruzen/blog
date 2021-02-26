<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Follow;
use App\Blog;
use App\Image;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $image = $user->image;
        $user->post_count=Blog::where('user_id',$user->id)->count();
        $user->follow_count=Follow::where('auth_id',$user->id)->count();
        $user->follower_count=Follow::where('user_id',$user->id)->count();

        $blogs = Blog::with(['user','category','tags','comments'])->where('user_id',$user->id)->paginate(9);
        return view('profile.user',compact('user','blogs','image'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::pluck('name','id')->all();
      $tags = Tag::pluck('name','name')->all();
      return view('blog.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $blog = Blog::create([
          'title'       => $request->title,
          'body'        => $request->body,
          'category_id' => $request->category_id,
      ]);

      $tagsId = collect($request->tags)->map(function($tag){
        return Tag::firstOrCreate([
          'name' => $tag
        ])->id;
      });
      $blog->tags()->attach($tagsId);
      return redirect('/blog')->with('key', 'You have done successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username)
    {
        $user = User::all()->where('username',$username)->first();
        if(!empty($user)){
            if($user->id == Auth::user()->id){
              return redirect('user');
            }

            $user->post_count=Blog::where('user_id',$user->id)->count();
            $user->follow_count=Follow::where('auth_id',$user->id)->count();
            $user->follower_count=Follow::where('user_id',$user->id)->count();
            $user->follow = Follow::where(['user_id' => $user->id, 'auth_id' => Auth::user()->id ])->count();
            $blogs = Blog::with(['user','category','tags','comments'])->where('user_id',$user->id)->paginate(9);
            return view('profile.profile',compact('user','blogs'));
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        $image = $user->image;
        return view('profile.edit',compact('user','image'));
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
         $user = User::findorfail($id);

         if(!empty($user)){
           $user->name = $request->name;
           $user->email = $request->email;
           $user->username = $request->username;

           $user->save();

           if($request->profile){
               $imageName =  time().'.'.$request->profile->extension();
               $request->profile->move(public_path('profile'), $imageName);

               $image = new Image();
               $image->user_id = $id;
               $image->url = 'profile/'.$imageName;

               $image->save();
           }
         }

         return redirect()->route('profile.index');
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

    public function follow($username){
      $user = User::where('username',$username)->get()->first();
      return view('profile.follow',compact('user'));
    }

    public function following($username){
      $user = User::where('username',$username)->get()->first();
      return view('profile.following',compact('user'));
    }

}
