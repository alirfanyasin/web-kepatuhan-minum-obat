<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use App\Models\TodolistCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Redirect ke dashboard sesuai role
        if ($user->hasRole('pasien')) {
            return app(DashboardPatientController::class)->index();
        }

        $dataPatient = User::role('pasien')
            ->with('medicalCheckup')
            ->orderBy('name', 'asc')
            ->get();

        $totalPatient = $dataPatient->count();

        $totalActive = $dataPatient->filter(function ($patient) {
            $last = $patient->medicalCheckup->sortByDesc('created_at')->first();
            return $last && $last->status !== 'recovered';
        })->count();

        $totalRecovered = $dataPatient->filter(function ($patient) {
            $last = $patient->medicalCheckup->sortByDesc('created_at')->first();
            return $last && $last->status === 'recovered';
        })->count();

        $totalDoctor = User::role('nakes')->count();
        $taskCategories = TodolistCategory::withCount('todolist')->get();
        $totalTasks = $taskCategories->sum('todolists_count');

        return view('pages.app.dashboard', compact(
            'dataPatient',
            'totalPatient',
            'totalActive',
            'totalRecovered',
            'totalDoctor',
            'taskCategories',
            'totalTasks',
        ));
    }
}
