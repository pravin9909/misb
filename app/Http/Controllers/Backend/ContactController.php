<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function contact() {
        $contact = Contact::all();
        // dd($contact);
        return view('backend.contact',compact('contact'));
    }
    public function delete($id) {
        $contact_id = Contact::find($id);
        $contact_id->delete();
        return redirect()->to('/admin/contact');
    }
}
