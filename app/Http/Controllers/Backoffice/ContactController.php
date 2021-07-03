<?php

namespace App\Http\Controllers\Backoffice;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('backoffice.contacts.index', compact('contacts'));
    }

    public function show($id) {

        $contact = Contact::find($id);
        return view('backoffice.contacts.show', compact('contact'));
    }

    public function destroy($id) {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('backoffice.contact.index')->with('success','Contact Supprimé !');
    }
}
