<?php

namespace App\Http\Controllers;

use App\Models\Conference;

use Illuminate\Http\Request;
use App\Exports\ExportConference;
use Maatwebsite\Excel\Facades\Excel;

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
        $resultats = Conference::paginate(10);
        return view('resultat.indexConference', compact('resultats'));
    }
    public function resultatsConference()
    {
        if (request('search')) {
            $resultats = Conference::where('fullname', 'like', '%' . request('search') . '%')
                ->orWhere('email', 'like', '%' . request('search') . '%')
                ->orWhere('phone', 'like', '%' . request('search') . '%')
                ->orWhere('company', 'like', '%' . request('search') . '%')
                ->orWhere('type', 'like', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $resultats = Conference::paginate(10);
        }

        return view('resultat.indexConferenceConference', ['resultats' => $resultats, 'search' => request('search')]);
    }
    public function changeState(Request $request, $id)
    {
        if ($request->ajax()) {
            $user = Conference::find($id);
            if ($user) {
                if ($user->participated == 0) {
                    $user->participated = 1;
                } else {
                    $user->participated = 0;
                }
                $user->save();
                return response()->json(['success' => 1]);
            }
            return response()->json(['success' => 0]);
        }
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


    public function exportConferences(Request $request)
    {
        return Excel::download(new ExportConference, 'Participants.xlsx');
    }

    public function showCertificate($id)
    {
        $conferences = Conference::all();
        foreach ($conferences as $conference) {
            if (md5($conference->id) == $id && $conference->participated == 1) {
                if ($conference->is_speaker == 1) {
                    return view('showCertificateSpeaker', ['idMeeting' => md5($conference->id), 'certificate' => $conference]);
                }
                return view('showCertificate', ['idMeeting' => md5($conference->id), 'certificate' => $conference]);
            }
        }
        abort(404, 'Page not found');
    }
}
