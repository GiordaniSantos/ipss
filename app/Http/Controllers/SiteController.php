<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Video;

class SiteController extends Controller
{
    public function site(){
        $banners = Banner::orderBy('ordem','desc')->where('tipo_posicao', 'cap')->where('ativo', 1)->get()->all();
        $video = Video::orderBy('data_publicacao','desc')->where('destaque', 1)->get()->take(1)->first();
       
        return view('site.index', [
            'banners'=>$banners,
            'video' => $video
        ]);
    }
}
