<?php

namespace App\Http\Controllers\Backoffice;

use App\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
    public function index() {
        $sessions = Session::orderBy('created_at', 'desc')->get();
        return view('backoffice.sessions.index', compact('sessions'));
    }
    public function create() {
        return view('backoffice.sessions.ajout');
    }

    public function store(Request $request) {
        Session::create($request->all());
        return redirect()->route('backoffice.session.index')->with('success','Session Crée !');
    }


    public function destroy($id) {
        $session = Session::find($id);
        $session->delete();
        return redirect()->route('backoffice.session.index')->with('success','Session Supprimée !');
    }
}
