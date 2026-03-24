<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_checkups', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            // PATIENT IDENTITY
            // $table->string('full_name');
            $table->date('birth_date');
            $table->tinyInteger('gender'); // 1 = male, 0 = female
            $table->string('nik', 20);
            $table->text('address');

            // BLOOD PRESSURE
            $table->integer('systolic')->nullable();
            $table->integer('diastolic')->nullable();

            // ANTHROPOMETRY
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('bmi')->nullable();
            $table->integer('waist_circumference')->nullable();

            // BLOOD SUGAR
            $table->integer('fasting_glucose')->nullable();
            $table->integer('random_glucose')->nullable();
            $table->float('hba1c')->nullable();

            // CHOLESTEROL
            $table->integer('total_cholesterol')->nullable();

            // KIDNEY FUNCTION
            $table->float('creatinine')->nullable();

            // MEDICAL HISTORY
            $table->boolean('history_hypertension')->nullable();
            $table->boolean('history_diabetes')->nullable();
            $table->year('diabetes_diagnosis_year')->nullable();
            $table->boolean('taking_medication')->nullable();
            $table->boolean('routine_checkup')->nullable();
            $table->boolean('family_hypertension')->nullable();
            $table->boolean('family_diabetes')->nullable();

            // RISK FACTORS
            $table->boolean('smoking')->nullable();
            $table->integer('cigarettes_per_day')->nullable();
            $table->boolean('high_salt_diet')->nullable();
            $table->boolean('high_sugar_diet')->nullable();
            $table->boolean('lack_of_exercise')->nullable();
            $table->boolean('obesity')->nullable();
            $table->boolean('stress')->nullable();
            $table->boolean('abdominal_obesity')->nullable();
            $table->boolean('alcohol_consumption')->nullable();
            $table->boolean('poor_sleep')->nullable();

            // SYMPTOMS
            $table->boolean('polydipsia')->nullable();
            $table->boolean('polyphagia')->nullable();
            $table->boolean('polyuria')->nullable();
            $table->boolean('weight_loss')->nullable();

            $table->boolean('nausea_and_vomiting')->nullable();
            $table->boolean('headache')->nullable();
            $table->boolean('nosebleed')->nullable();
            $table->boolean('chest_pain')->nullable();

            $table->string('diagnosis');

            $table->string('code')->nullable();
            $table->enum('status', ['treatment', 'recovered'])->default('treatment');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_checkups');
    }
};
