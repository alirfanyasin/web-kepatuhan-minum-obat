<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckup;
use App\Models\Todolist;
use App\Models\TodolistCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    // For Doctor
    public function index($id)
    {
        $data = MedicalCheckup::findOrFail($id);

        $categories = TodolistCategory::all();

        // Todo hari ini
        $todolists = Todolist::where('medical_checkups_id', $id)
            ->whereDate('created_at', Carbon::today())
            ->orderBy('time', 'asc')
            ->get();

        // Semua todo (target)
        $targetTodos = Todolist::where('medical_checkups_id', $id)->get();

        // Progress hari ini
        $todayDone = $todolists->where('status', 'done')->count();
        $todayTotal = $todolists->count();

        // Progress target
        $targetDone = $targetTodos->where('status', 'done')->count();
        $targetTotal = $targetTodos->count();

        return view(
            'pages.app.todolist-management',
            compact(
                'data',
                'categories',
                'todolists',
                'targetTodos',
                'todayDone',
                'todayTotal',
                'targetDone',
                'targetTotal'
            )
        );
    }

    public function toggle($id)
    {
        $todo = Todolist::findOrFail($id);

        $todo->status = $todo->status === 'done' ? 'pending' : 'done';

        $todo->save();

        return response()->json([
            'success' => true,
            'status'  => $todo->status,
        ]);
    }

    public function destroy($id)
    {
        $todo = Todolist::findOrFail($id);

        $wasDone   = $todo->status === 'done';
        $createdAt = $todo->created_at->toDateString();
        $today     = Carbon::today()->toDateString();
        $isToday   = $createdAt === $today;

        $todo->delete();

        return response()->json([
            'success'  => true,
            'wasDone'  => $wasDone,
            'isToday'  => $isToday,
        ]);
    }

    public function store(Request $request, $id)
    {
        $medicalCheckup = MedicalCheckup::findOrFail($id);
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'todolist_category_id' => ['required'],
            'time' => ['required'],
        ]);

        $data['medical_checkups_id'] = $id;
        $data['user_id'] = $medicalCheckup->user_id;
        $data['status'] = 'pending';

        $day = $request->day;

        // jika ada input day
        if ($day) {

            for ($i = 0; $i < $day; $i++) {

                $data['created_at'] = Carbon::now()->addDays($i);
                $data['updated_at'] = Carbon::now()->addDays($i);

                Todolist::create($data);
            }
        } else {

            Todolist::create($data);
        }

        return redirect()->back()->with('success', 'Todo berhasil dibuat');
    }
}
