<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use App\Models\TodolistCategory;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ── Daftar pasien (untuk tabel) ────────────────────────────────────
        $dataPatient = User::role('patient')
            ->with('medicalCheckup')
            ->orderBy('name', 'asc')
            ->get();

        // ── Stats ──────────────────────────────────────────────────────────

        // Total seluruh pasien
        $totalPatient = $dataPatient->count();

        // Pasien yang sedang dalam perawatan (checkup terakhir bukan recovered)
        $totalActive = $dataPatient->filter(function ($patient) {
            $last = $patient->medicalCheckup->sortByDesc('created_at')->first();
            return $last && $last->status !== 'recovered';
        })->count();

        // Pasien yang sudah sembuh (checkup terakhir = recovered)
        $totalRecovered = $dataPatient->filter(function ($patient) {
            $last = $patient->medicalCheckup->sortByDesc('created_at')->first();
            return $last && $last->status === 'recovered';
        })->count();

        // Jumlah dokter
        $totalDoctor = User::role('doctor')->count();

        // ── Kategori Tugas ─────────────────────────────────────────────────
        $taskCategories = TodolistCategory::withCount('todolist')->get();

        // Total semua tugas untuk menghitung persentase bar
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
