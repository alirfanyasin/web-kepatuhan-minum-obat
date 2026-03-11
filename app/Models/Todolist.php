<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todolist extends Model
{
    protected $guarded = [];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function medicalCheckup(): BelongsTo
    {
        return $this->belongsTo(MedicalCheckup::class);
    }

    public function todolistCategory(): BelongsTo
    {
        return $this->belongsTo(TodolistCategory::class);
    }
}
