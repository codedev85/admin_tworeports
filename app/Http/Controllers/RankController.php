<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rank;
use App\Category;
use Newsletter;
use App\RankCat;

class RankController extends Controller
{
    //
    public function ranking_all(){
        $rankings = Rank::all();

        //dd($rankings);
       return  view('ranking.new-rank-all')
        ->with('rankings', $rankings);
    }

    //add subrank category
    public function rank_cats(){
        return view('ranking.rank-cats');
    }

    public function rank_cats_post(Request $request){
      //  dd($request);
        $ranks_cat =  $request->input('ranks');
        $new_rank_cat = new RankCat();
        $new_rank_cat->name = $ranks_cat;
        $new_rank_cat->save();
        return back()->with('success','Ranks Category created successfully');
    }





    public function ranks_create(){
        $rank_cats = Category::all();
        //fetch all rank category
        $sub_rank_cats = RankCat::all();

        return view('ranking.create-ranks')
                    ->with('sub_rank_cats',$sub_rank_cats)
                   ->with('rank_cats',$rank_cats);
    }
    public function post_ranks(Request $request){
        // dd(json_encode($request->input('facebook_value')));
 //dd($request);
        $name = $request->input('teams');
     
        $teams = $request->input('teams');
      //  dd($teams);
        $date = $request->input('date');
        $twitter = $request->input('twitter');
        $twitter_value = $request->input('twitter_value');
        $facebook = $request->input('facebook');
        $facebook_value = $request->input('facebook_value');
        $instagram = $request->input('instagram');
        $instagram_value = $request->input('instagram_value');
        $cat_id = $request->input('cat_id');
        $sub_rank_id = $request->input('sub_rank_id');
        $total = $request->input('total');

        
        // $total = ($twitter + $instagram + $facebook);
       
        // $name = json_encode($request->input('teams'));
        // $teams = json_encode($request->input('teams'));
        // $date = json_encode($request->input('date'));
        // $twitter = json_encode($request->input('twitter'));
        // $twitter_value = json_encode($request->input('twitter_value'));
        // $facebook = json_encode($request->input('facebook'));
        // $facebook_value = json_encode($request->input('facebook_value'));
        // $instagram = json_encode($request->input('instagram'));
        // $instagram_value = json_encode($request->input('instagram_value'));
        // $cat_id = $request->input('cat_id');
        // $sub_rank_id = $request->input('sub_rank_id');
        // $total = ($twitter + $instagram + $facebook);
// dd( $instagram_value);

        $create_ranks = new Rank();

            //   $desc_array = [];
              $desc_array2 = [];
              $desc_array3 = [];
              $desc_array4 = [];
              $desc_array5 = [];
              $desc_array6 = [];
              $desc_array7 = [];
              $desc_array8 = [];
              $desc_array9 = [];
              $desc_array10 = [];
            //   array_push($desc_array , $name);
              array_push($desc_array2 , $teams);
              array_push($desc_array3 , $date);
              array_push($desc_array4 , $twitter);
              array_push($desc_array5 , $twitter_value);
              array_push($desc_array6 , $facebook);
              array_push($desc_array7 , $facebook_value);
              array_push($desc_array8 , $instagram);
              array_push($desc_array9 , $instagram_value);
              array_push($desc_array10, $total);
            //   array_push($desc_array , $name);
            //   dd(json_encode($desc_array));
            // json_encode($desc_array);
            // json_encode($desc_array2);
            // json_encode($desc_array3);
            // json_encode($desc_array4);
            // json_encode($desc_array5);
            // json_encode($desc_array6);
            // json_encode($desc_array7);
            // json_encode($desc_array8);
            // json_encode($desc_array9);

        // $create_ranks->rank_name =  json_encode($desc_array);
        $create_ranks->rank_name =  json_encode($desc_array2);
        $create_ranks->date = json_encode($desc_array3);
        $create_ranks->twitter =  json_encode($desc_array4);
        $create_ranks->add_sub_twit = json_encode($desc_array5);
        $create_ranks->facebook =  json_encode($desc_array6);
        $create_ranks->add_sub_fb =  json_encode($desc_array7);
        $create_ranks->instagram = json_encode($desc_array8);
        $create_ranks->add_sub_inst = json_encode($desc_array9);
        $create_ranks->total = json_encode($desc_array10);
        $create_ranks->category_id = $cat_id;
        $create_ranks->sub_rank_id = $sub_rank_id;
   
       // dd($create_ranks);
        //endehre

        // $create_ranks->rank_name = $name;
        // $create_ranks->date = $date;
        // $create_ranks->twitter = $twitter;
        // $create_ranks->add_sub_twit =$twitter_value;
        // $create_ranks->instagram = $instagram;
        // $create_ranks->add_sub_inst =$instagram_value;
        // $create_ranks->facebook =$facebook;
        // $create_ranks->add_sub_fb =$facebook_value;
        // $create_ranks->total = 1000;
        // $create_ranks->category_id = $cat_id;
        // $create_ranks->sub_rank_id = $sub_rank_id;
        $create_ranks->save();


        return back();


    }
  


    public function edit_ranks($id){
    $edit_rank = Rank::where('id',$id)->first();
    $cats = Category::all();
    return view('ranking.edit-rank')
                 ->with('cats',$cats)
                 ->with('edit_rank',$edit_rank);


    }
    public function update_ranks(Request $request,$id){
      //  dd($request);
        $name = $request->input('teams');
        $teams = $request->input('teams');
        $date = $request->input('date');
        $twitter = $request->input('twitter');
        $twitter_value = $request->input('twitter_value');
        $facebook = $request->input('facebook');
        $facebook_value = $request->input('facebook_value');
        $instagram = $request->input('instagram');
        $instagram_value = $request->input('instagram_value');
        $cat_id = $request->input('cat_id');
        $total = ($twitter + $instagram + $facebook);
        // dd($request);

       Rank::where('id',$id)->update([
        'rank_name'    => $name,
        'date'         => $date,
        'twitter'      => $twitter,
        'add_sub_twit' => $twitter_value,
        'instagram'    => $instagram,
        'add_sub_inst' => $instagram_value,
        'facebook'     => $facebook,
        'add_sub_fb'   => $facebook_value,
        'total'        => $total,
        'category_id'  => $cat_id,
       ]);

    
        return back()->with('success','Rank updated successfully');


    }

    public function rank_destroy($id)
    {
        Rank::find($id)->delete();

        return back();
    }
    public function ranks_category(){
        return view('ranking.ranks-category');
    }
    public function ranks_category_create(Request $request){

        $categories = $request->input('ranks');

        $new_cat = new Category();

        $new_cat->name = $categories;
        $new_cat->save();
        return back();

    }
    public function subscribe(Request $request){
      // dd($request->lname);
       if(!Newsletter::getMember($request->email)){

       $new = Newsletter::subscribe($request->email, ['firstName'=>$request->name, 'lastName'=>$request->lname]);

        return redirect('/')->with('success','You have suscribed successfully check your mail');
       }
       return redirect('/')->with('success','You have suscribed successfully check your mail');

    }
}
