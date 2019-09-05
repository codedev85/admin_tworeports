<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Transaction;
use App\Article;
use PDF;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
    // dd($paymentDetails['data']['metadata']['articles_category']);
        
   


       $new_tranx = new Transaction();
     

       $new_tranx->customer_email     = $paymentDetails['data']['metadata']['customer_email'];
       $new_tranx->customer_name      = $paymentDetails['data']['metadata']['name'];
       $new_tranx->article_id         = $paymentDetails['data']['metadata']['article_id'];
       $new_tranx->article_name       = $paymentDetails['data']['metadata']['article_title'];
       $new_tranx->article_cat        = $paymentDetails['data']['metadata']['articles_category'];
       $new_tranx->amount             = $paymentDetails['data']['amount'];
       $new_tranx->save();

       if( $paymentDetails['data']['metadata']['articles_category'] == 2 ){
        $article = Article::where('id',$paymentDetails['data']['metadata']['article_id'])->where('downloadarticlecat_id',2)->first();
        // dd($article);
    }else{
        $article = Article::where('id',$paymentDetails['data']['metadata']['article_id'])->where('downloadarticlecat_id',1)->first();
        // dd($article);
    }
            

    //   dd($article);
          view()->share('article', $article);
           //download free article 
           $articles = ['dfhfhfhfhfh'];
           // if($article[0]->article_is_not_free == 0){
           $pdf = PDF::loadView('articles.pdf')->setPaper('a4','portrait');
           $filename ='tworeports-articles';
           return $pdf->download('articles.pdf');
           

          
    //    }
           return back();
        // dd($paymentDetails['data']['metadata']['customer_email']);
        // $paymentDetails['data']['metadata']['name'];
        // $paymentDetails['data']['metadata']['article_id'];
        // $paymentDetails['data']['metadata']['article_title'];
        // $paymentDetails['data']['metadata']['article_category'];
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    public function transactions(){
        $tranx = Transaction::orderBy('created_at','DESC')->simplePaginate(5);
        $sum_tranx = Transaction::sum('amount');
        
        return view('tranx.all-tranx')->with('sum_tranx',$sum_tranx)->with('tranx',$tranx);
    }
   
}