<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    return view('category.index');
  }
  public function category()
    {
      return view('category.category');
    }
}
