<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;

class FreelanceController extends Controller
{

    public function index()
    {
        // Récupérer tous les freelances
        $freelances = Freelance::all();

        // Retourner la vue avec les freelances
        return view('layouts.foremployé_frelance_freelance', compact('freelances'));
    }

    public function save(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
        ]);

        // Créer un nouveau freelance
        $freelance = new Freelance();
        $freelance->first_name = $validatedData['first_name'];
        $freelance->last_name = $validatedData['last_name'];
        $freelance->phone_number = $validatedData['phone_number'];
        $freelance->email_address = $validatedData['email_address'];

        // Enregistrer le freelance dans la base de données
        $freelance->save();

        // Rediriger vers une page de succès ou afficher un message de succès
        return redirect()->with('success', 'Freelance enregistré avec succès.');
    }

    public function edit($id)
    {
        // Récupérer le freelance à éditer
        $freelance = Freelance::find($id);
        if (!$freelance) {
            // Gérer le cas où le freelance n'est pas trouvé
            abort(404);
        }
        // Récupérer tous les freelances pour afficher la liste
        $freelances = Freelance::all();
        return view('freelance.edit', compact('freelances', 'freelance'));
    }

    public function update(Request $request, $id)
{
    // Valider les données du formulaire
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'email_address' => 'required|email|max:255',
    ]);

    // Mettre à jour les informations du freelance
    $freelance = Freelance::findOrFail($id);
    $freelance->update($validatedData);

    // Rediriger vers une page de succès ou afficher un message de succès
    return redirect()->route('freelance.success')->with('success', 'Freelance mis à jour avec succès.');
}


}
