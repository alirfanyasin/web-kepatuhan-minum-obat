<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicalCheckup extends Model
{
    protected $fillable = [

        'user_id',

        'birth_date',
        'gender',
        'nik',
        'address',

        'systolic',
        'diastolic',

        'weight',
        'height',
        'bmi',
        'waist_circumference',

        'fasting_glucose',
        'random_glucose',
        'hba1c',

        'total_cholesterol',
        'creatinine',

        'history_hypertension',
        'history_diabetes',
        'diabetes_diagnosis_year',
        'taking_medication',
        'routine_checkup',
        'family_hypertension',
        'family_diabetes',

        'smoking',
        'cigarettes_per_day',
        'high_salt_diet',
        'high_sugar_diet',
        'lack_of_exercise',
        'obesity',
        'stress',
        'abdominal_obesity',
        'alcohol_consumption',
        'poor_sleep',

        'polydipsia',
        'polyphagia',
        'polyuria',
        'weight_loss',

        'code',
        'status'

    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function todolist(): HasMany
    {
        return $this->hasMany(Todolist::class);
    }
}
