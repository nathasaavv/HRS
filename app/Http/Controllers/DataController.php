<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Family_data;
use App\Models\Employee_record;
use App\models\User;



class DataController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $data = Employee::where('is_archived', false)
            ->when($query, function ($queryBuilder, $query) {
                $queryBuilder->where(function ($subQuery) use ($query) {
                    $subQuery->where('id_number', 'like', "%{$query}%")
                             ->orWhere('full_name', 'like', "%{$query}%");
                });
            })->paginate(10000000);
        return view('employee.index', compact('data'));
    }


    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $employee=new Employee();
        $employee->id_number = $request->id_number;
        $employee->full_name = $request->full_name;
        $employee->nickname = $request->nickname;
        $employee->contract_date = $request->contract_date;
        $employee->work_date = $request->work_date;
        $employee->status = $request->status;
        $employee->position = $request->position;
        $employee->nuptk = $request->nuptk;
        $employee->gender = $request->gender;
        $employee->place_birth = $request->place_birth;
        $employee->birth_date = $request->birth_date;
        $employee->religion = $request->religion;
        $employee->email = $request->email;
        $employee->hobby = $request->hobby;
        $employee->marital_status = $request->marital_status;
        $employee->residence_address = $request->residence_address;
        $employee->phone = $request->phone;
        $employee->address_emergency = $request->address_emergency;
        $employee->phone_emergency = $request->phone_emergency;
        $employee->blood_type = $request->blood_type;
        $employee->last_education = $request->last_education;
        $employee->agency = $request->agency;
        $employee->graduation_year = $request->graduation_year;
        $employee->competency_training_place = $request->competency_training_place;
        $employee->organizational_experience = $request->organizational_experience;
        $employee->save();


        $keluarga = new Family_data();
        $keluarga->id_number = $request->id_number;
        $keluarga->mate_name = $request->mate_name;
        $keluarga->child_name = $request->child_name;
        $keluarga->wedding_date = $request->wedding_date;
        $keluarga->wedding_certificate_number = $request->wedding_certificate_number;
        $keluarga->save();



        User::create([
            'name' => $employee->nickname,
            'email' => $request->email,
            'password' => $request->id_number,
        ]);

        return redirect()->route('employee.index')->with('');
     }

     public function edit($id)
{
    $employee = Employee::where('id_number', $id)->firstOrFail();
    $family = Family_data::where('id_number', $id)->firstOrFail();
    return view('employee.edit', compact('employee', 'family'));
}



     public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'full_name' => 'required|string|max:255',
        'nickname' => 'required|string|max:255',
        'contract_date' => 'required|date',
        'work_date' => 'required|date',
        'status' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'nuptk' => 'nullable|numeric',
        'gender' => 'required|string|max:255',
        'place_birth' => 'required|string|max:255',
        'birth_date' => 'required|date',
        'religion' => 'required|string|max:255',
        'email' => 'required|email',
        'hobby' => 'nullable|string|max:255',
        'marital_status' => 'required|string|max:255',
        'residence_address' => 'required|string|max:255',
        'phone' => 'required|numeric',
        'address_emergency' => 'nullable|string|max:255',
        'phone_emergency' => 'nullable|numeric',
        'blood_type' => 'nullable|string|max:255',
        'last_education' => 'required|string|max:255',
        'agency' => 'nullable|string|max:255',
        'graduation_year' => 'nullable|numeric',
        'competency_training_place' => 'nullable|string|max:255',
        'organizational_experience' => 'nullable|string|max:255',
        'mate_name' => 'nullable|string|max:255',
        'child_name' => 'nullable|string|max:255',
        'wedding_date' => 'nullable|date',
        'wedding_certificate_number' => 'nullable|numeric',
    ]);

    $employee = Employee::where('id_number', $id)->firstOrFail();
    $employee->update($validatedData);

    $familyData = Family_data::where('id_number', $id)->firstOrFail();
    $familyData->update([
        'mate_name' => $validatedData['mate_name'],
        'child_name' => $validatedData['child_name'],
        'wedding_date' => $validatedData['wedding_date'],
        'wedding_certificate_number' => $validatedData['wedding_certificate_number'],
    ]);

    return redirect()->route('employee.index')->with('');
}
public function archive($id)
{
    $employee = Employee::where('id_number', $id)->firstOrFail();
    $employee->is_archived = true;
    $employee->save();

    return redirect()->route('employee.archived.list')->with('success', 'Data karyawan berhasil diarsipkan.');
}



public function archived()
{
    $data = Employee::where('is_archived', true)->paginate(10);
    return view('employee.archived', compact('data'));
}


public function show($id)
{
    $employee = Employee::findOrFail($id);
    $family = Family_Data::where('id_number', $id)->first();
    return view('employee.show', compact('employee', 'family'));
}
public function destroy($id)
{
    $employee = Employee::where('id_number', $id)->firstOrFail();

    $employee->records()->delete();
    $employee->delete();

    return redirect()->route('employee.index')->with('success', 'Data karyawan berhasil dihapus.');
}



public function unarchive($id)
{
    $employee = Employee::where('id_number', $id)->firstOrFail();
    $employee->is_archived = false;
    $employee->save();

    return redirect()->route('employee.archived.list')->with('success', 'Data karyawan berhasil di-unarsipkan.');
}

}


