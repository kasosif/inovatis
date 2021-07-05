<?php

namespace App\Http\Controllers\Backoffice;

use App\Formation;
use App\Specialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormationController extends Controller
{
    public function index() {
        $formations = Formation::orderBy('created_at', 'desc')->get();
        return view('backoffice.formations.index', compact('formations'));
    }

    public function create() {
        return view('backoffice.formations.ajout');
    }

    public function store(Request $request) {
        $f = Formation::create($request->except('specialites'));
        foreach ($request->specialites as $s) {
            Specialite::create([
                'name' => $s['name'],
                'formation_id' => $f->id
            ]);
        }
        return redirect()->route('backoffice.formation.index')->with('success','Formation Crée !');
    }

    public function edit($id) {
        $formation = Formation::find($id);
        return view('backoffice.formations.edit', compact('formation'));

    }

    public function update(Request $request, $id) {
        $formation = Formation::find($id);
        if ($formation->type == "initiale") {
            $formation->name = $request->get('name');
            $formation->save();
        }
        foreach ($formation->specialites as $ss) {
            $ss->delete();
        }
        foreach ($request->specialites as $s) {
            Specialite::create([
                'name' => $s['name'],
                'formation_id' => $formation->id
            ]);
        }
        return redirect()->route('backoffice.formation.index')->with('success','Formation Mise à jour !');
    }

    public function destroy($id) {
        $formation = Formation::find($id);
        $formation->delete();
        return redirect()->route('backoffice.formation.index')->with('success','Formation Supprimée !');
    }
}
