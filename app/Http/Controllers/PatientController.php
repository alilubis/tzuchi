<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::get();
        return view('patient.index', compact('patients'));
    }

    public function register()
    {
        return view('patient.register');
    }

    public function dashboard()
    {
        return view('patient.dashboard');
    }

    public function create(Request $request){
        $this->validate($request,[
            'no_seri' => 'required',
            'location' => 'required',
            'sickness' => 'required',
            'name' => 'required',
            'id_card' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'family_name' => 'required',
            'family_phone' => 'required',
        ]);
        
        $patient = Patient::create([
            'no_seri' => $request->no_seri,
            'location' => $request->location,
            'sickness' => $request->sickness,
            'name' => $request->name,
            'id_card' => $request->id_card,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'domicile' => $request->domicile,
            'phone' => $request->phone,
            'family_name' => $request->family_name,
            'family_phone' => $request->family_phone,
            'vaccination' => $request->vaccination,
            'queue_number' => $request->queue_number,
            'island' => $request->island,
        ]);

        if($patient)
        {
            return redirect()->route('patient.index')->with(['success' => 'Data berhasil ditambahkan']);
        }else{
            return redirect()->route('patient.index')->with(['error' => 'Data gagal ditambahkan']);;
        }
    }
}
