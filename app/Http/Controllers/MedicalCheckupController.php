<?php

namespace App\Http\Controllers;

use App\Models\MedicalCheckup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MedicalCheckupController extends Controller
{
    public function index($id)
    {
        $dataUser = User::findOrFail($id);
        $dataMedicalCheckup = MedicalCheckup::where('user_id', $id)->orderBy('id', 'desc')->get();
        return view('pages.app.medical-checkup', compact('dataUser', 'dataMedicalCheckup'));
    }


    public function create($id)
    {
        $dataUser = User::findOrFail($id);
        return view('pages.app.medical-checkup-create', compact('dataUser'));
    }


    public function store(Request $request, $id)
    {
        $data = $request->validate([

            'birth_date' => 'required|date',
            'gender' => 'required|string',
            'nik' => 'required|string|max:20',
            'address' => 'required|string',

            'systolic' => 'nullable|numeric|min:60|max:250',
            'diastolic' => 'nullable|numeric|min:40|max:150',

            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'bmi' => 'nullable|numeric',
            'waist_circumference' => 'nullable|numeric',

            'fasting_glucose' => 'nullable|numeric',
            'random_glucose' => 'nullable|numeric',
            'hba1c' => 'nullable|numeric',

            'total_cholesterol' => 'nullable|numeric',
            'creatinine' => 'nullable|numeric',

            'history_hypertension' => 'nullable|string',
            'history_diabetes' => 'nullable|string',
            'diabetes_diagnosis_year' => 'nullable|numeric',

            'taking_medication' => 'nullable|string',
            'routine_checkup' => 'nullable|string',

            'family_hypertension' => 'nullable|string',
            'family_diabetes' => 'nullable|string',

            'smoking' => 'nullable|string',
            'cigarettes_per_day' => 'nullable|numeric',

            'high_salt_diet' => 'nullable|string',
            'high_sugar_diet' => 'nullable|string',
            'lack_of_exercise' => 'nullable|string',
            'obesity' => 'nullable|string',
            'stress' => 'nullable|string',
            'abdominal_obesity' => 'nullable|string',
            'alcohol_consumption' => 'nullable|string',
            'poor_sleep' => 'nullable|string',

            'polydipsia' => 'nullable|string',
            'polyphagia' => 'nullable|string',
            'polyuria' => 'nullable|string',
            'weight_loss' => 'nullable|string',
        ]);


        $data['user_id'] = $id;
        $data['code'] = $this->generateMedicalCode();


        MedicalCheckup::create($data);


        return redirect()
            ->route('medical-checkup.index', $id)
            ->with('success', 'Data pemeriksaan berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = MedicalCheckup::findOrFail($id);
        return view('pages.app.medical-checkup-edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = MedicalCheckup::findOrFail($id);

        $validated = $request->validate([
            'birth_date' => 'required|date',
            'gender' => 'required|in:0,1',
            'nik' => 'required',
            'address' => 'required|string',

            'systolic' => 'nullable|numeric',
            'diastolic' => 'nullable|numeric',

            'weight' => 'nullable|numeric',
            'height' => 'nullable|numeric',
            'bmi' => 'nullable|numeric',
            'waist_circumference' => 'nullable|numeric',

            'fasting_glucose' => 'nullable|numeric',
            'random_glucose' => 'nullable|numeric',
            'hba1c' => 'nullable|numeric',

            'total_cholesterol' => 'nullable|numeric',
            'creatinine' => 'nullable|numeric',

            'history_hypertension' => 'nullable|boolean',
            'history_diabetes' => 'nullable|boolean',
            'diabetes_diagnosis_year' => 'nullable|numeric',

            'taking_medication' => 'nullable|boolean',
            'routine_checkup' => 'nullable|boolean',

            'family_hypertension' => 'nullable|boolean',
            'family_diabetes' => 'nullable|boolean',

            'smoking' => 'nullable|boolean',
            'cigarettes_per_day' => 'nullable|numeric',

            'high_salt_diet' => 'nullable|boolean',
            'high_sugar_diet' => 'nullable|boolean',
            'lack_of_exercise' => 'nullable|boolean',
            'obesity' => 'nullable|boolean',
            'stress' => 'nullable|boolean',
            'abdominal_obesity' => 'nullable|boolean',
            'alcohol_consumption' => 'nullable|boolean',
            'poor_sleep' => 'nullable|boolean',

            'polydipsia' => 'nullable|boolean',
            'polyphagia' => 'nullable|boolean',
            'polyuria' => 'nullable|boolean',
            'weight_loss' => 'nullable|boolean',
        ]);

        $data->update($validated);

        return redirect()
            ->route('medical-checkup.index', $data->user->id)
            ->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $data = MedicalCheckup::findOrFail($id);

        $data->delete();

        return redirect()
            ->back()
            ->with('success', 'Data pemeriksaan berhasil dihapus');
    }


    function generateMedicalCode()
    {
        do {
            $year = date('y'); // 2 digit tahun
            $prefix = strtoupper(Str::random(2));
            $random = strtoupper(Str::random(6));

            $code = $year . $prefix . '-' . $random; // total 10 karakter

        } while (MedicalCheckup::where('code', $code)->exists());

        return $code;
    }
}
