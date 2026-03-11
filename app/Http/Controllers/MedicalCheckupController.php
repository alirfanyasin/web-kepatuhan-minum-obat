<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckup;
use App\Models\User;
use Illuminate\Http\Request;

class MedicalCheckupController extends Controller
{
    public function index($id)
    {
        $dataUser = User::findOrFail($id);
        $dataMedicalCheckup = MedicalCheckup::where('user_id', $id)->get();
        return view('pages.app.medical-checkup', compact('dataUser', 'dataMedicalCheckup'));
    }


    public function create($id)
    {
        $data = User::findOrFail($id);
        return view('pages.app.medical-checkup-create', compact('data'));
    }
}
