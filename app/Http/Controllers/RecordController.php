<?php

namespace App\Http\Controllers;
use App\Models\Employee_record;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');

    $records = Employee_record::query()
        ->when($search, function($queryBuilder, $search) {
            $queryBuilder->where('id_number', 'like', "%{$search}%")
                         ->orWhere('offense_type', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%");
        })
        ->paginate(10);

    return view('records.index', compact('records'));
}


public function create()
{

    return view('records.create');

}

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'id_number' => 'required|numeric',
                'offense_type' => 'required|string|max:255',
                'offense_date' => 'required|date',
                'description' => 'nullable|string|max:255',
            ]);

            Employee_record::create($validatedData);

            return redirect()->route('records.index')->with('success', 'berhasil menambahkan catatan');
        }

        public function show($id)
        {
            $record = Employee_record::findOrFail($id);
            return view('records.show', compact('record'));
        }

        public function edit($id)
        {
            $record = Employee_record::findOrFail($id);
            return view('records.edit', compact('record'));
        }

        public function update(Request $request, $id)
        {
            $validatedData = $request->validate([
                'id_number' => 'required|numeric',
                'offense_type' => 'required|string|max:255',
                'offense_date' => 'required|date',
                'description' => 'nullable|string|max:255',
            ]);

            $record = Employee_record::findOrFail($id);
            $record->update($validatedData);

            return redirect()->route('records.index')->with('success', 'Berhasil mengubah catatan!');
        }

        public function destroy($id)
        {
            $record = Employee_record::findOrFail($id);
            $record->delete();

            return redirect()->route('records.index')->with('success', 'Berhasil menghapus catatan!');
        }

}
