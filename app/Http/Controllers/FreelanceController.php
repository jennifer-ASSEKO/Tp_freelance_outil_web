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
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'email_address' => $request->input('email_address'),
        ];
        Freelance::create($data);
        return redirect()->back()->with(['message', 'ajout effectué']);
    }

    public function edit($id)
    {
        // Récupérer le freelance à éditer
        $freelance = Freelance::find($id);
        // Récupérer tous les freelances pour afficher la liste
        $freelances = Freelance::all();
        return view('layouts.foremployé_frelance_freelance', compact('freelances', 'freelance'));
    }

    public function update(Request $request, $id){
        // Trouve l'instance du freelance à mettre à jour en utilisant l'ID passé en paramètre
        $freelance = Freelance::find($id);

        // Crée un tableau associatif avec les données du formulaire
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'email_address' => $request->input('email_address'),
        ];

        // Met à jour les attributs du freelance avec les nouvelles données
        $freelance->update($data);

        // Redirige l'utilisateur vers la page d'index des freelances avec un message de confirmation
        return redirect()->back()->with(['message'=>'mise à jour effectuée']);
    }



}
