<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Demande;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function bts() {
        return view('bts');
    }

    public function btp() {
        return view('btp');
    }

    public function cap() {
        return view('cap');
    }

    public function internationalStudent() {
        return view('international-student');
    }

    public function requiredDocuments() {
        return view('required-documents');
    }

    public function faq() {
        return view('faq');
    }

    public function freeTraining() {
        return view('free-training');
    }

    public function preregistration() {
        return view('preregistration');
    }

    public function preinscription() {
        return view('preinscription');
    }

    public function reprenderpreinscription(Request $request) {
        if ($request->isMethod('post')) {
            $demande = Demande::where('email', $request->get('email'))->first();
            if (!$demande) {
                return back()->with(['error' => 'Email Non utilisé']);
            }
            return view('preinscription', compact('demande'));
        }
        return view('reprendre-preinscription');
    }

    public function newdemande(Request $request) {
        Demande::updateOrCreate(['email' => $request->get('email')], $request->except('email'));
        return response()->json(['success' => 'Demande Enregistrée']);

    }

    public function contact(Request $request) {
        $data = request()->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'pays' => 'required',
            'telephone' => 'required|numeric',
            'programme' => 'required',
        ]);
        if ($data) {
            $contact = Contact::create($request->all());
            $mail = new ContactFormMail($data);
            $mail->subject('Demande de contact Inovatis');
            //$mail->from($contact->email, $contact->nom);
            Mail::to(env('MAIL_INOVATIS'))->send($mail);
            return response()->json(['type' => 'success', 'message' => 'Merci pour votre confiance ! , Un conseiller pédagogique vous contactera dés la réception de vos coordonnées']);
        }
        return response()->json(['type' => 'danger', 'message' => 'Desolé une erreur est survenue']);
    }
}
