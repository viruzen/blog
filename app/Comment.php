<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Blog;

class Comment extends Model
{

protected $fillable = [
      'body',
      'user_id',
      'blog_id',
  ];

  protected static function boot()
  {
      parent::boot();

      static::creating(function ($comment) {
          if (is_null($comment->user_id)) {
              $comment->user_id = auth()->user()->id;
          }
      });
  }

  public function blog()
  {
      return $this->belongsTo(Blog::class);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
