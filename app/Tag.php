<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Tag extends Model
{
  protected $fillable = ['name'];

  public function blogs()
  {
      return $this->belongsToMany(Blog::class)->withTimestamps();
  }

}
