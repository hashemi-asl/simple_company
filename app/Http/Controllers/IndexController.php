<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $seo=Seo::orderBy('id','desc')->take(1)->skip(0)->get();
//        return $seo;
        return view('front_end.index',compact('seo'));
    }
}
