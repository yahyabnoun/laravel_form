<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $formation
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Formation $formation)
    {
        $formFields = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:students'],
            'phone' => ['required', 'string', 'min:10', 'max:255', 'regex:/^[0-9\-]+$/'],
            'activity' => ['required', 'string', 'max:255'],
            'niveau' => ['required', 'string', 'max:255'],
            'langue' => ['required', 'string', 'max:255'],
        ], [], [
            'fullname' => 'Nom complet',
            'email' => 'email',
            'phone' => 'téléphone',
            'activity' => 'activité',
            'niveau' => 'Niveau d\'éducation',
            'langue' => 'Langue',
        ]);

        $student = new Student();
        $student->fullname = $formFields['fullname'];
        $student->email =  $formFields['email'];
        $student->phone = $formFields['phone'];
        $student->activity = $formFields['activity'];
        $student->niveau = $formFields['niveau'];
        $student->langue = $formFields['langue'];
        $student->save();

        return redirect()->route('home')->with([
            'success' => 'Vous avez été inscrit avec succès.',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formation  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return dd($formation);
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    public function resultats()
    {
        $resultat = Student::paginate(10);
        return view('resultat.index', compact('resultat'));
    }
}
