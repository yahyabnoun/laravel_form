<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
            'teaching' => ['required', 'array'],
            'subjectTeaching' => ['required', 'string', 'max:255'],
            'usedChatGPT' => ['required', 'string', 'max:255'],
            // 'interested' => ['required', 'string', 'max:255'],
            'aiTools' => ['required', 'string', 'max:255'],
            'scheduling' => ['required', 'array'],
            'trainingOnChatGPT' => ['required', 'string', 'max:255'],
            // '1' => ['required'],

        ], [], [
            'fullname' => 'Nom complet',
            'email' => 'email',
            'teaching' => 'enseignement',
        ]);
        // dd($formFields['scheduling']);
        $student = new Student();
        $student->fullname = $formFields['fullname'];
        $student->email =  $formFields['email'];
        $student->teaching = collect($formFields['teaching'])->implode(',');
        $student->subjectTeaching =  $formFields['subjectTeaching'];
        $student->usedChatGPT =  $formFields['usedChatGPT'];
        // $student->interested =  $formFields['interested'];
        $student->aiTools =  $formFields['aiTools'];
        $student->scheduling =  collect($formFields['scheduling'])->implode(',');
        $student->trainingOnChatGPT =  $formFields['trainingOnChatGPT'];

        // dd($request["0"]);

        if ($student->save()) {
            for ($i=1; $i <= 6; $i++) {

                DB::table('interest_students')->insert([

                    'interest_studentid' => $student->id,
                    'interest_id' => $i,
                    'confirmed' => $request[$i],

                ]);

            }

        }




        // $StudentInterest = new StudentInterest();
        // $StudentInterest->interest_studentid = $request["0"];
        // $StudentInterest->interest_id = $request["0"];

        // $StudentInterest->save();



        return redirect()->route('home')->with([
            'success' => 'Vous avez été inscrit avec succès.',
        ]);
        // $formFields = $request->validate([
        //     'fullname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'max:255', 'unique:students'],
        //     'phone' => ['required', 'string', 'min:10', 'max:255', 'regex:/^[0-9\-]+$/'],
        //     'activity' => ['required', 'string', 'max:255'],
        //     'niveau' => ['required', 'string', 'max:255'],
        //     'langue' => ['required', 'string', 'max:255'],
        // ], [], [
        //     'fullname' => 'Nom complet',
        //     'email' => 'email',
        //     'phone' => 'téléphone',
        //     'activity' => 'activité',
        //     'niveau' => 'Niveau d\'éducation',
        //     'langue' => 'Langue',
        // ]);

        // $student = new Student();
        // $student->fullname = $formFields['fullname'];
        // $student->email =  $formFields['email'];
        // $student->phone = $formFields['phone'];
        // $student->activity = $formFields['activity'];
        // $student->niveau = $formFields['niveau'];
        // $student->langue = $formFields['langue'];
        // $student->save();

        // return redirect()->route('home')->with([
        //     'success' => 'Vous avez été inscrit avec succès.',
        // ]);

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
