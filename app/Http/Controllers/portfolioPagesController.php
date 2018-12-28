<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\GalleryController;

class portfolioPagesController extends Controller
{
      public function getMakeupPage() {
            $data = $this->processDataByType('makeup');

            return view('frontend.subpages.portfolio.makeup')->withData($data);
         }  // getMakeupPage() Ends Here



         public function getHairPage() {
            $data = $this->processDataByType('hair');

            return view('frontend.subpages.portfolio.hair')->withData($data);
         }  // getHairPage() Ends Here

         public function getFashionPage() {
            $data = $this->processDataByType('fashion');
            return view('frontend.subpages.portfolio.fashion')->withData($data);
         }  // getFashionPage() Ends Here

         public function processDataByType($value) {
            $gallery = new GalleryController();
            $gallery_items = json_decode($gallery->readAll());
            $data = [];

            foreach ($gallery_items as $i => $item) {
               if ($item->tags === $value) {
                  $data[$i] = $item;
               } 
            };
            return $data;
         }
}
