<?php

namespace App\Http\Controllers;

use App\Advisory;
use Illuminate\Http\Request;


class AdvisoryController extends Controller
{
    //

    public function adv_all(){
        $adv = Advisory::all();
        return view('advisory.adv-all')->with('adv',$adv);
    }
    public function adv_create(){
        return view('advisory.adv-create');
    }
    public function adv_create_post(Request $request){
        $name = $request->input('name');
        $title = $request->input('main_title');
        $desc = $request->input('desc');

        $new_adv = new Advisory();
        $new_adv->name = $name;
        $new_adv->title = $title;
        $new_adv->adv_desc = $desc;
        $new_adv->save();
        return back()->with('success','Advisory created successfully');
    }

 public function adv_banner(Request $request){
        // dd($request);
        return view('advisory.adv-banner');
    }
    public function adv_single($id){
          $find_adv = Advisory::where('id',$id)->first();
          $random_adv= Advisory::limit(5)->get();
        //   dd($random_adv);
          return view('advisory.adv-single-page')
                              ->with('random_adv',$random_adv)
                              ->with('find_adv',$find_adv);

    }
}
