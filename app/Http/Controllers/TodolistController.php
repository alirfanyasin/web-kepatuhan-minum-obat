<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    // For Doctor
    public function index()
    {
        return view('pages.app.todolist-management');
    }



    // For Pasien
}
