<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

  public function about()
    {
      return view('frontend.about');
    }

  public function book()
    {
      return view('frontend.book');
    }

  public function music()
    {
      return view('frontend.music');
    }
}
