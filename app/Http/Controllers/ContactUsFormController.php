<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactUsFormController extends Controller
{
    public function createForm(Request $request) {
        return view('contact');
      }
  
      // Store Contact Form data
      public function ContactUsForm(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'name' => 'required',
              'email' => 'required|email',
              'subject'=>'required',
              'message' => 'required'
           ]);
  
          //  Store data in database
          //Contact::create($request->all());
  
          
          return back()->with('success', 'Hemos recibido su consulta, en breve nos pondremos en contacto con usted.');
      }
}
