<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfolioPagesController extends Controller
{
      public function getMakeupPage() {
            return view('frontend.subpages.portfolio.makeup');
         }  // getMakeupPage() Ends Here

         public function getHairPage() {
            return view('frontend.subpages.portfolio.hair');
         }  // getHairPage() Ends Here

         public function getFashionPage() {
            return view('frontend.subpages.portfolio.fashion');
         }  // getFashionPage() Ends Here
}
