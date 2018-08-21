<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function short(Request $request){
        $url = $request->url;
        $short_url=substr(md5($url.mt_rand()),0,8);
        $u = new ShortUrl();
        $u->full_url = $url;
        $u->tiny_url = $short_url;
        $u->save();
        return view('home',['short_url'=>$short_url],['url'=>$url]);


    }
    public function goto(Request $request,$url){
        $tiny = $url;
        $s = ShortUrl::where('tiny_url',$tiny)->get()->first();
        $s->count = $s->count+1;
        $s->save();
        return redirect($s->full_url);
    }
    public function getAnalytics(){
        $s = ShortUrl::orderBy('count','desc')->get()->take(100);
        return view('board',['url'=>$s]);
    }
}
