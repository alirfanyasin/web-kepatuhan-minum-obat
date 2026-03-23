<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckup;
use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $dataPatient =  User::role('pasien')
            ->with('medicalCheckup')
            ->orderBy('name', 'asc')
            ->get();

        return view('pages.app.patients', compact('dataPatient'));
    }
}
