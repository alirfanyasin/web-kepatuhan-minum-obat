<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $dataPatient = User::role('patient')->orderBy('name', 'asc')->get();
        return view('pages.app.patients', compact('dataPatient'));
    }
}
