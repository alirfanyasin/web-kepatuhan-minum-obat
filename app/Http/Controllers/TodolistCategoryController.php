<?php

namespace App\Http\Controllers;

use App\Models\TodolistCategory;
use Illuminate\Http\Request;

class TodolistCategoryController extends Controller
{
    public function store(Request $request)
    {
        $data =  $request->validate([
            'name' => 'required|max:50'
        ]);

        TodolistCategory::create($data);
        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $data = TodolistCategory::findOrFail($id);
        $data->delete();
        return redirect()
            ->back()
            ->with('success', 'Data berhasil dihapus');
    }
}
