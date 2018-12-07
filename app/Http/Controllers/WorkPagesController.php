<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getWebsiteWork()
    {
        return view('frontend.subpages.work.websites');
    }
    public function getLogoWork()
    {
        return view('frontend.subpages.work.logo');
    }
    public function getGraphicDesignWork()
    {
        return view('frontend.subpages.work.graphic-design');
    }

}
