<?php

namespace Database\Seeders;

use App\Models\MedicalCheckup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalCheckupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'user_id' => 3,
                'full_name' => 'Ahmad Fauzi',
                'birth_date' => '1985-05-10',
                'gender' => 1,
                'nik' => '3578123456780001',
                'address' => 'Surabaya',

                'systolic' => 140,
                'diastolic' => 90,

                'weight' => 80,
                'height' => 170,
                'bmi' => 27.7,
                'waist_circumference' => 95,

                'fasting_glucose' => 120,
                'random_glucose' => 180,
                'hba1c' => 6.5,

                'total_cholesterol' => 220,
                'creatinine' => 1.1,

                'history_hypertension' => 1,
                'history_diabetes' => 0,
                'diabetes_diagnosis_year' => null,
                'taking_medication' => 1,
                'routine_checkup' => 0,
                'family_hypertension' => 1,
                'family_diabetes' => 0,

                'smoking' => 1,
                'cigarettes_per_day' => 10,
                'high_salt_diet' => 1,
                'high_sugar_diet' => 1,
                'lack_of_exercise' => 1,
                'obesity' => 1,
                'stress' => 1,
                'abdominal_obesity' => 1,
                'alcohol_consumption' => 0,
                'poor_sleep' => 0,

                'polydipsia' => 0,
                'polyphagia' => 0,
                'polyuria' => 0,
                'weight_loss' => 0
            ],

            [
                'user_id' => 3,
                'full_name' => 'Siti Rahma',
                'birth_date' => '1990-03-12',
                'gender' => 0,
                'nik' => '3578123456780002',
                'address' => 'Sidoarjo',

                'systolic' => 120,
                'diastolic' => 80,

                'weight' => 60,
                'height' => 160,
                'bmi' => 23.4,
                'waist_circumference' => 78,

                'fasting_glucose' => 95,
                'random_glucose' => 120,
                'hba1c' => 5.4,

                'total_cholesterol' => 180,
                'creatinine' => 0.9,

                'history_hypertension' => 0,
                'history_diabetes' => 0,
                'diabetes_diagnosis_year' => null,
                'taking_medication' => 0,
                'routine_checkup' => 1,
                'family_hypertension' => 0,
                'family_diabetes' => 1,

                'smoking' => 0,
                'cigarettes_per_day' => null,
                'high_salt_diet' => 0,
                'high_sugar_diet' => 1,
                'lack_of_exercise' => 0,
                'obesity' => 0,
                'stress' => 1,
                'abdominal_obesity' => 0,
                'alcohol_consumption' => 0,
                'poor_sleep' => 0,

                'polydipsia' => 0,
                'polyphagia' => 0,
                'polyuria' => 0,
                'weight_loss' => 0
            ],

            [
                'user_id' => 4,
                'full_name' => 'Budi Santoso',
                'birth_date' => '1978-08-20',
                'gender' => 1,
                'nik' => '3578123456780003',
                'address' => 'Gresik',

                'systolic' => 150,
                'diastolic' => 95,

                'weight' => 90,
                'height' => 168,
                'bmi' => 31.9,
                'waist_circumference' => 102,

                'fasting_glucose' => 140,
                'random_glucose' => 220,
                'hba1c' => 7.1,

                'total_cholesterol' => 240,
                'creatinine' => 1.3,

                'history_hypertension' => 1,
                'history_diabetes' => 1,
                'diabetes_diagnosis_year' => 2018,
                'taking_medication' => 1,
                'routine_checkup' => 1,
                'family_hypertension' => 1,
                'family_diabetes' => 1,

                'smoking' => 1,
                'cigarettes_per_day' => 15,
                'high_salt_diet' => 1,
                'high_sugar_diet' => 1,
                'lack_of_exercise' => 1,
                'obesity' => 1,
                'stress' => 1,
                'abdominal_obesity' => 1,
                'alcohol_consumption' => 0,
                'poor_sleep' => 1,

                'polydipsia' => 1,
                'polyphagia' => 1,
                'polyuria' => 1,
                'weight_loss' => 1
            ],

            [
                'user_id' => 4,
                'full_name' => 'Dewi Lestari',
                'birth_date' => '1995-11-01',
                'gender' => 0,
                'nik' => '3578123456780004',
                'address' => 'Surabaya',

                'systolic' => 118,
                'diastolic' => 78,

                'weight' => 55,
                'height' => 162,
                'bmi' => 21.0,
                'waist_circumference' => 72,

                'fasting_glucose' => 88,
                'random_glucose' => 110,
                'hba1c' => 5.2,

                'total_cholesterol' => 170,
                'creatinine' => 0.8,

                'history_hypertension' => 0,
                'history_diabetes' => 0,
                'diabetes_diagnosis_year' => null,
                'taking_medication' => 0,
                'routine_checkup' => 1,
                'family_hypertension' => 0,
                'family_diabetes' => 0,

                'smoking' => 0,
                'cigarettes_per_day' => null,
                'high_salt_diet' => 0,
                'high_sugar_diet' => 0,
                'lack_of_exercise' => 0,
                'obesity' => 0,
                'stress' => 0,
                'abdominal_obesity' => 0,
                'alcohol_consumption' => 0,
                'poor_sleep' => 0,

                'polydipsia' => 0,
                'polyphagia' => 0,
                'polyuria' => 0,
                'weight_loss' => 0
            ],

            [
                'user_id' => 4,
                'full_name' => 'Rudi Hartono',
                'birth_date' => '1988-02-17',
                'gender' => 1,
                'nik' => '3578123456780005',
                'address' => 'Mojokerto',

                'systolic' => 135,
                'diastolic' => 88,

                'weight' => 75,
                'height' => 172,
                'bmi' => 25.3,
                'waist_circumference' => 92,

                'fasting_glucose' => 110,
                'random_glucose' => 160,
                'hba1c' => 6.0,

                'total_cholesterol' => 210,
                'creatinine' => 1.0,

                'history_hypertension' => 0,
                'history_diabetes' => 0,
                'diabetes_diagnosis_year' => null,
                'taking_medication' => 0,
                'routine_checkup' => 0,
                'family_hypertension' => 1,
                'family_diabetes' => 1,

                'smoking' => 1,
                'cigarettes_per_day' => 5,
                'high_salt_diet' => 1,
                'high_sugar_diet' => 1,
                'lack_of_exercise' => 1,
                'obesity' => 0,
                'stress' => 1,
                'abdominal_obesity' => 1,
                'alcohol_consumption' => 0,
                'poor_sleep' => 1,

                'polydipsia' => 0,
                'polyphagia' => 0,
                'polyuria' => 0,
                'weight_loss' => 0
            ],

        ];

        foreach ($data as $item) {
            MedicalCheckup::create($item);
        }
    }
}
