<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Video;
use App\CompanyNew;
use App\Partner;
use App\Article;
use App\AboutBg;
use App\Infographic;
use App\Banner;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


  public  function welcome(){
      $video = Video::orderBY('created_at', 'DESC')->first();
      $news = CompanyNew::orderBy('created_at','DESC')->limit(3)->get();
      $partners = Partner::orderBy('created_at','DESC')->where('activation',1)->get();
      $banner = Banner::orderBy('created_at','DESC')->first();
      //dd($partners);
      $all_articles = Article::where('downloadarticlecat_id',2)->orderBy('created_at','DESC')->limit(5)->get();
      $all_casestudy = Article::where('downloadarticlecat_id',1)->orderBy('created_at','DESC')->limit(5)->get();
      $hero_imgs = AboutBg::all();
      $info = Infographic::get();
    //  dd($info);
    //dd($hero_imgs);
    // dd($all_casestudy);
      //dd($all_articles);
      return view('welcome')
                 ->with('partners',$partners)
                 ->with('news',$news)
                 ->with('banner',$banner)
                 ->with('video',$video)
                 ->with('info',$info)
                 ->with('hero_imgs',$hero_imgs)
                 ->with('all_casestudy',$all_casestudy)
                 ->with('all_articles',$all_articles);
  }


}
