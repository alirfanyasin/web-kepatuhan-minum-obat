<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckup;
use App\Models\Todolist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPatientController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // ── Medical Checkup terakhir dengan status treatment ───────────────
        $lastCheckup = MedicalCheckup::where('user_id', $user->id)
            ->where('status', 'treatment')
            ->latest()
            ->first();

        // ── Stats Todolist ─────────────────────────────────────────────────
        $allTodolists = Todolist::where('medical_checkups_id', optional($lastCheckup)->id)->get();

        $totalTodolist     = $allTodolists->count();
        $todolistDone      = $allTodolists->where('status', 'done')->count();
        $todolistPending   = $allTodolists->where('status', 'pending')->count();
        $totalCheckup      = MedicalCheckup::where('user_id', $user->id)->count();

        // ── Progress harian ────────────────────────────────────────────────
        $todayTodos  = $allTodolists->filter(fn($t) => Carbon::parse($t->created_at)->isToday());
        $todayDone   = $todayTodos->where('status', 'done')->count();
        $todayTotal  = $todayTodos->count();
        $todayPercent = $todayTotal ? round(($todayDone / $todayTotal) * 100) : 0;

        // ── Progress target ────────────────────────────────────────────────
        $targetPercent = $totalTodolist ? round(($todolistDone / $totalTodolist) * 100) : 0;

        // ── Todolist terbaru (urut created_at asc) ─────────────────────────
        $recentTodos = Todolist::where('medical_checkups_id', optional($lastCheckup)->id)
            ->orderBy('created_at', 'asc')
            ->take(5)
            ->get();

        return view('pages.app.dashboard-patient', compact(
            'totalTodolist',
            'todolistDone',
            'todolistPending',
            'totalCheckup',
            'todayDone',
            'todayTotal',
            'todayPercent',
            'targetPercent',
            'todolistDone',
            'totalTodolist',
            'lastCheckup',
            'recentTodos',
        ));
    }
}
