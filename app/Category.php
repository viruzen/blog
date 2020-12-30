<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Category extends Model
{
  protected $fillable = ['name'];

   protected static function boot()
   {
       parent::boot();
       static::deleting(function ($category) {
           $category->blogs()->delete();
       });
   }

   public function blogs()
   {
       return $this->hasMany(Blog::class);
   }
}
