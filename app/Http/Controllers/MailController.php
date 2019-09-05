<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailAdmin;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
//     //
  public  function send_mail (Request $request) {
    $email = $request->input('email');
    // dd($email);

        Mail::to('olawuyiayansola@gmail.com')->send(new MailAdmin());
        return back()->with('success','Email sent successfully');

        // return 'A message has been sent to Mailtrap!';

    }

}
