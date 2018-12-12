<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
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
        $categories = Category::all();
        $subcategories = Sub_Category::all();
        return view('pages.home')->withSubcategories($subcategories)->withCategories($categories);
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

    // Session::first('succes', 'je email is verzonden');

    // return redirect()->url('/');

    }

}
