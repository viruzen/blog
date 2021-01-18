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
    public function view()
      {
        return view('frontend.view');
      }
    public function music()
      {
        return view('frontend.music');
      }

    public function moredetails()
      {
        return view('frontend.moredetails');
      }

      public function terms()
        {
          return view('frontend.terms');
        }

        public function privacypolicy()
          {
            return view('frontend.privacypolicy');
          }
}
