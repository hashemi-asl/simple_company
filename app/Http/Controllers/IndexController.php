<?php

namespace App\Http\Controllers;

use App\Models\Parallax;
use App\Models\Seo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $seo=Seo::orderBy('id','desc')->first();
//        $seo=Seo::orderBy('id','desc')->take(1)->skip(0)->get();
//        dd($seo);
//        return $seo;

        $parallax=Parallax::orderBy('id','desc')->first();
//        $parallax=Parallax::orderBy('id','desc')->take(1)->skip(0)->get();;
//        dd($parallax);
        return view('front_end.index',compact('seo','parallax'));
    }
}
