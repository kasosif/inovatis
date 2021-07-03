<?php

namespace App\Http\Controllers\Backoffice;

use App\Demande;
use App\Mail\DemandeAccepteMail;
use App\Mail\DemandeRefuseMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    public function index() {
        $demandes = Demande::orderBy('created_at', 'desc')->get();
        return view('backoffice.demandes.index', compact('demandes'));
    }

    public function create() {
        return view('backoffice.demandes.ajout');
    }

    public function store(Request $request) {
        Demande::create(['email' => $request->get('email')], $request->except('email'));
        return redirect()->route('backoffice.demande.index')->with('success','Demande Crée !');
    }

    public function edit($id) {
        $demande = Demande::find($id);
        return view('backoffice.demandes.edit', compact('demande'));

    }

    public function update(Request $request) {
        Demande::updateOrCreate(['email' => $request->get('email')], $request->except('email'));
        return redirect()->route('backoffice.demande.index')->with('success','Demande Mise à jour !');
    }

    public function accept($id) {
        $demande = Demande::find($id);
        $demande->etat = "accepte";
        $demande->save();
        $mail = new DemandeAccepteMail($demande);
        $mail->subject('Demande d\'inscription Inovatis');
        //$mail->from(env('MAIL_INOVATIS'), 'Inovatis Administration');
        Mail::to($demande->email)->send($mail);
        return redirect()->route('backoffice.demande.index')->with('success','Demande Acceptée !');
    }

    public function deny($id) {
        $demande = Demande::find($id);
        $demande->etat = "refuse";
        $demande->save();
        $mail = new DemandeRefuseMail($demande);
        $mail->subject('Demande d\'inscription Inovatis');
        //$mail->from(env('MAIL_INOVATIS'), 'Inovatis Administration');
        Mail::to($demande->email)->send($mail);
        return redirect()->route('backoffice.demande.index')->with('success','Demande Refusée !');
    }

    public function destroy($id) {
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()->route('backoffice.demande.index')->with('success','Demande Supprimé !');
    }


}
