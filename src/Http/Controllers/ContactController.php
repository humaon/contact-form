<?php
namespace Humaon\Contact\Http\Controllers;

use Humaon\Contact\Models\Contact;
use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Humaon\Contact\Mail\Contact as ContactMail;


class ContactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
    public function store(Request $request){

        Mail::to(config('contact.admin_email'))->send(new ContactMail($request->all()));
        Contact::create($request->all());
        return redirect()->back()->with('success',config('contact.success_message'));
    }
}
