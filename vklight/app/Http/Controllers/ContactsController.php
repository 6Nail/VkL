<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function submit(ContactsRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->surname = $req->input('surname');
        $contact->email = $req->input('email');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success','Message is sent');
    }

    public function allData() {
        $contact = new Contact;
        return view('messages', ['data' => $contact->all() ]);
    }

}
