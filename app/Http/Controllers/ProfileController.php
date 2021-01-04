<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Follow;
use App\Blog;
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
      $user->post_count=Blog::where('user_id',$user->id)->count();
      $user->follow_count=Follow::where('auth_id',$user->id)->count();
      $user->follower_count=Follow::where('user_id',$user->id)->count();
        return view('profile.user', compact('user'));

      $blogs = Blog::with(['user','category','tags','comments'])->paginate(9);
dd($blogs);
        return view('blog.index',compact('blogs'));

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
