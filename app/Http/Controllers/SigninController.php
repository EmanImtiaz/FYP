<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{

    public function signin ()
    {
        return view ('Frontend.Signin');

    }


}


public function becomePhotographer(Request $request)
{
    $user = Auth::user();

    $data = $request->validate([
        'documents' => 'required|mimes:pdf',
        'company_name' => 'required',
        'bio' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust the image validation rules as needed.
    ]);

    if ($request->hasFile('documents')) {
        $document = $request->file('documents');
        $documentPath = $document->store('public/assets/documents/user_' . $user->id);
        $data['document_path'] = $documentPath;
    }

    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');
        $logoPath = $logo->store('public/assets/logo');
        $data['logo_path'] = $logoPath;
    }
    if ($user->photographerProfile) {
        $user->photographerProfile->update($data);
    } else {
        $photographerProfile = new PhotographerProfile($data);
        $user->photographerProfile()->save($photographerProfile);
    }


    return redirect()->route('Frontend.profile')->with('success', 'You are now registered as a photographer.');
}



