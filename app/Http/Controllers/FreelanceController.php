<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FreelanceController extends Controller
{
    public function index()
    {
        $freelances = Freelance::all();
        return view('freelance.foremployé_frelance_freelance', compact('freelances'));
    }

    public function edit($id)
    {
        $freelance = Freelance::find($id);
        $freelances = Freelance::all();
        return view('setting.index', compact('freelances', 'freelance'))->with('edit', 'Modification effectuée!');
    }

    public function destroy($id)
    {
        $freelance = Freelance::find($id);
        if (!$freelance) {
            return redirect()->route('employe-freelance')->with('error', 'Freelance non trouvé!');
        }

        if ($freelance->profile_picture) {
            Storage::disk('public')->delete($freelance->profile_picture);
        }

        if ($freelance->freelance_pdf) {
            Storage::disk('public')->delete($freelance->freelance_pdf);
        }

        $freelance->delete();

        return redirect()->route('employe-freelance')->with('delete', 'Freelance supprimé avec succès!');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'freelance_pdf' => 'nullable|mimes:pdf|max:10000'
        ]);

        $freelance = new Freelance();
        $freelance->first_name = $validatedData['first_name'];
        $freelance->last_name = $validatedData['last_name'];
        $freelance->phone_number = $validatedData['phone_number'];
        $freelance->email_address = $validatedData['email_address'];

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $freelance->profile_picture = $profilePicturePath;
        }

        if ($request->hasFile('freelance_pdf')) {
            $pdfPath = $request->file('freelance_pdf')->store('freelance_pdfs', 'public');
            $freelance->freelance_pdf = $pdfPath;
        }

        $freelance->save();

        return redirect()->route('employe-freelance')->with('save', 'Freelance saved successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email_address' => 'required|email|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'freelance_pdf' => 'nullable|mimes:pdf|max:10000'
        ]);

        $freelance = Freelance::findOrFail($id);
        $freelance->first_name = $validatedData['first_name'];
        $freelance->last_name = $validatedData['last_name'];
        $freelance->phone_number = $validatedData['phone_number'];
        $freelance->email_address = $validatedData['email_address'];

        if ($request->hasFile('profile_picture')) {
            if ($freelance->profile_picture) {
                Storage::disk('public')->delete($freelance->profile_picture);
            }
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
            $freelance->profile_picture = $profilePicturePath;
        }

        if ($request->hasFile('freelance_pdf')) {
            if ($freelance->freelance_pdf) {
                Storage::disk('public')->delete($freelance->freelance_pdf);
            }
            $pdfPath = $request->file('freelance_pdf')->store('freelance_pdfs', 'public');
            $freelance->freelance_pdf = $pdfPath;
        }

        $freelance->save();

        return redirect()->route('employe-freelance')->with('save', 'Freelance saved successfully');
    }

    public function download($id)
    {
        $freelance = Freelance::findOrFail($id);
        $filePath = storage_path('app/public/pdfs/' . $freelance->freelance_pdf);
        return response()->download($filePath);
    }

    public function show($id)
    {
        $freelance = Freelance::findOrFail($id);
        return view('freelance_details.foremployé_freelance_detail', compact('freelance'));
    }
}
