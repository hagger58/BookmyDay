<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
<<<<<<< HEAD
use App\Post;
=======
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
use Mail;
use Session;
use App\Mail\sendmail;

use App\Http\Controllers\Controller;
use Illuminate\Mail\Mailer;
use Notification;

use App\Sub_Category;
use App\Category;

class PageController extends Controller
{
    public function getIndex()
    {
        $images = Product::orderby('id', 'desc')->take(5)->get();
        $images2 = Product::orderby('id', 'desc')->skip(5)->take(5)->get();
        return view('pages.home')
        ->withImages($images)
        ->withImages2($images2);
    }

    public function getAbout()
    {
        return view('pages.about');        
    }
    public function getContact()
    {
        return view('pages.contact');
    }


    public function postContact(Request $request)
    {
        $this->validate($request,
        [
            'email' => 'required|email',
            'subject'=> 'min:10',
            'message' => 'min:10'
        ]);

        $data = array(
           'email' => $request->email,
           'subject' => $request->subject,
           'bodyMessage' => $request->message
        );

        Mail::send('emails.contact', $data, function($message) use ($data)
    {
        $message->from($data['email']);
        $message->to('hagger58@gmail.com');
        $message->subject($data['subject']);
    });

<<<<<<< HEAD
    Session::flash('success', 'your mail has been sent');
=======
    // Session::first('succes', 'je email is verzonden');

    // return redirect()->url('/');
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd

        // return redirect()->route('pages.contact');
        return view('pages.contact');
    }
    public function getStripboeken() 
    {
    $images = Product::orderby('id', 'desc')->where('subcategory_id', '=', '7')->take(5)->get();

    return view('categorieen.stripboeken')->withImages($images);
    }

}
