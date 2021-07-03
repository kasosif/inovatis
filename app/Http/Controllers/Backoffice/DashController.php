<?php

namespace App\Http\Controllers\Backoffice;

use App\Contact;
use App\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index() {
        $nbcontacts = Contact::count();
        $nbdemandes = Demande::count();
        return view('backoffice.dashboard',compact('nbcontacts','nbdemandes'));
    }
}
