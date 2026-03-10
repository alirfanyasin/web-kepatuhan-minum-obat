<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedicalCheckupController extends Controller
{
    public function index($id)
    {
        $data = User::findOrFail($id);
        return view('pages.app.medical-checkup', compact('data'));
    }


    public function create($id)
    {
        $data = User::findOrFail($id);
        return view('pages.app.medical-checkup-create', compact('data'));
    }
}
