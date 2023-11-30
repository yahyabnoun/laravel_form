<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('showConference');
    }

    public function resultats()
    {
        $resultat = Conference::paginate(10);
        return view('resultat.indexConference', compact('resultat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:conferences'],
            'phone' => ['required', 'string', 'min:10', 'max:255', 'regex:/^[0-9\-]+$/'],
            'company' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ], [], [
            'fullname' => 'full name',
            'email' => 'email',
            'phone' => 'phone number',
            'company' => 'company',
            'type' => 'conference access'
        ]);

        $student = new Conference();
        $student->fullname = $formFields['fullname'];
        $student->email =  $formFields['email'];
        $student->phone = $formFields['phone'];
        $student->company = $formFields['company'];
        $student->type = $formFields['type'];
        $student->save();

        return redirect()->route('conference')->with([
            'success' => 'You have been successfully registered.',
        ]);

    }
}
