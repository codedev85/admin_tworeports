<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Rank;
use App\Partner;
use App\CompanyNew;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use App\Infographic;
use App\Banner;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //$this->middleware(['auth','admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function homepage_index(){
        $videos = Video::all();
        $partners = Partner::all();
        
        return view('homepage.new-homepage')
                  ->with('partners',$partners)
                  ->with('videos', $videos);
    }

    public function homepage_index_news(){
        $news = CompanyNew::all();
       
        return view('homepage.new-all-news')->with('news',$news);

    }
    public function create_video(){
        return view('homepage.create-video');
    }
    public function create_video_post(Request $request){
       $title =  $request->input('title');
       $url = $request->input('url');
       //dd($url);
       $new_vids = new Video();
       $new_vids->title = $title;
       $new_vids->url = $url;
       $new_vids->save();
       return back();

    }
    public function video_destroy($id){
        Video::find($id)->delete();
        return back();
    }

    public function post_infographics(Request $request){
        $this->validate($request, [
                'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
            ]);
        if ($request->hasFile('url')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'infographics/'.$path;
            Storage::put($url, $resize->__toString());
            $new_infographic = new Infographic();
            $new_infographic->url = $url;
            $new_infographic->save();
        }
        return back()->with('success','Infographic Uploaded successfully');
    }

    public function post_side_banner(Request $request){
        // $this->validate($request, [
        //         'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=500,height=500',
        //     ]);

        if ($request->hasFile('url')) {
            $infographic_img = $request->file('url');
            $ext = $infographic_img->getClientOriginalExtension();
            $image_resize = Image::make($infographic_img->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.".$ext;
            $url = 'home_page_banner/'.$path;
            Storage::put($url, $resize->__toString());
            $new_infographic = new Banner();
            $new_infographic->img = $url;
            $new_infographic->save();
        }
        return back()->with('success','Banner Uploaded successfully');
    }


    public function rankings_index_tv(){

        $tv_ranks = Rank::where('category_id', 1)->get();
        $radio_ranks = Rank::where('category_id',2)->get();
        $music_ranks= Rank::where('category_id',3)->orderBy('created_at','DESC')->first();
        //dd(json_decode($music_ranks->rank_name));
        // dd(json_decode($music_ranks));
        $sport_ranks= Rank::where('category_id',4)->get();
        $movie_ranks= Rank::where('category_id',5)->get();
        $social_ranks= Rank::where('category_id',6)->get();
       //dd($tv_ranks);
        return view('ranking.rank-home')
                    ->with('movie_ranks',$movie_ranks)
                    ->with('social_ranks',$social_ranks)
                    ->with('sport_ranks',$sport_ranks)
                    ->with('music_ranks',$music_ranks)
                    ->with('radio_ranks', $radio_ranks)
                    ->with('tv_ranks',$tv_ranks);

    }

    public function create_partner(){
        return view('partners.partner-create');
    }
    public function all_partner(){
        $partners = partner::orderBy('created_at','DESC')->paginate(5);
        return view('partners.all-partners')->with('partners',$partners);
    }

    public function activate($id){
        
        Partner::where('id',$id)->update([
            'activation'=> 1,
        ]);
        return back();
    }
    public function deactivate($id){
      
        Partner::where('id',$id)->update([
            'activation'=> 0,
        ]);
        return back();
    }


    public function partner_create_post(Request $request)
    {
        //dd($request);
        $partner_name = $request->input('partner_name');

        if ($request->hasFile('partner_img')) {
            $hero_image = $request->file('partner_img');
            $ext = $hero_image->getClientOriginalExtension();
            $image_resize = Image::make($hero_image->getRealPath());
            $resize = Image::make($image_resize)->fit(120, 120)->encode($ext);
            $hash = md5($resize->__toString());
            $path = "{$hash}.$ext";
            $url = 'partners/'.$path;
            Storage::put($url, $resize->__toString());

            $new_partner = new Partner();
            $new_partner->name = $partner_name;
            $new_partner->partner_image = $url;
            $new_partner->save();
        }

        return back()->with('success','Partner created successfully');
    }
    public function partner_edit_post($id){

        $find_partner = Partner::find($id);
        return view('partners.edit-partner')->with('find_partner', $find_partner);

    }
    public function partner_update_post(Request $request , $id){
    $name = $request->input('partner_name');

    if($request->hasfile('partner_img')){
        $partner_img = $request->file('partner_img');
        $image_url = Storage::putfile('partners' , $partner_img);

       $partner = Partner::where('id',$id)->update([
           'name' => $name,
           'partner_image'=> $image_url
       ]);

    }
    return back()->with('success','Partner\'s information updated successfully');

    }

}
