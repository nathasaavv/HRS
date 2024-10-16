@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-center">
        <h4>Detail Karyawan</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="id_number" class="form-label">NIK:</label>
            <input type="text" class="form-control" value="{{ $employee->id_number }}" readonly>
        </div>
        <div class="mb-3">
            <label for="full_name" class="form-label">Nama Lengkap:</label>
            <input type="text" class="form-control" value="{{ $employee->full_name }}" readonly>
        </div>
        <div class="mb-3">
            <label for="nickname" class="form-label">Nama Panggilan:</label>
            <input type="text" class="form-control" value="{{ $employee->nickname }}" readonly>
        </div>
        <div class="mb-3">
            <label for="contract_date" class="form-label">Tanggal Kontrak:</label>
            <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($employee->contract_date)->format('d-m-Y') }}" readonly>
        </div>
        <div class="mb-3">
            <label for="work_date" class="form-label">Tanggal Kerja:</label>
            <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($employee->work_date)->format('d-m-Y') }}" readonly>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" class="form-control" value="{{ $employee->status }}" readonly>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Jabatan:</label>
            <input type="text" class="form-control" value="{{ $employee->position }}" readonly>
        </div>
        <div class="mb-3">
            <label for="nuptk" class="form-label">NUPTK:</label>
            <input type="text" class="form-control" value="{{ $employee->nuptk }}" readonly>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin:</label>
            <input type="text" class="form-control" value="{{ $employee->gender }}" readonly>
        </div>
        <div class="mb-3">
            <label for="place_birth" class="form-label">Tempat Lahir:</label>
            <input type="text" class="form-control" value="{{ $employee->place_birth }}" readonly>
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Tanggal Lahir:</label>
            <input type="text" class="form-control" value="{{ \Carbon\Carbon::parse($employee->birth_date)->format('d-m-Y') }}" readonly>
        </div>
        <div class="mb-3">
            <label for="religion" class="form-label">Agama:</label>
            <input type="text" class="form-control" value="{{ $employee->religion }}" readonly>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="text" class="form-control" value="{{ $employee->email }}" readonly>
        </div>
        <div class="mb-3">
            <label for="hobby" class="form-label">Hobby:</label>
            <input type="text" class="form-control" value="{{ $employee->hobby }}" readonly>
        </div>
        <div class="mb-3">
            <label for="marital_status" class="form-label">Status Perkawinan:</label>
            <input type="text" class="form-control" value="{{ $employee->marital_status }}" readonly>
        </div>
        <div class="mb-3">
            <label for="residence_address" class="form-label">Alamat tempat tinggal:</label>
            <input type="text" class="form-control" value="{{ $employee->residence_address }}" readonly>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" value="{{ $employee->phone }}" readonly>
        </div>
        <div class="mb-3">
            <label for="address_emergency" class="form-label">Alamat Darurat:</label>
            <input type="text" class="form-control" value="{{ $employee->address_emergency }}" readonly>
        </div>
        <div class="mb-3">
            <label for="phone_emergency" class="form-label">Telepon Darurat:</label>
            <input type="text" class="form-control" value="{{ $employee->phone_emergency }}" readonly>
        </div>
        <div class="mb-3">
            <label for="blood_type" class="form-label">Golongan Darah:</label>
            <input type="text" class="form-control" value="{{ $employee->blood_type }}" readonly>
        </div>
        <div class="mb-3">
            <label for="last_education" class="form-label">Pendidikan Terakhir:</label>
            <input type="text" class="form-control" value="{{ $employee->last_education }}" readonly>
        </div>
        <div class="mb-3">
            <label for="agency" class="form-label">Agensi:</label>
            <input type="text" class="form-control" value="{{ $employee->agency }}" readonly>
        </div>
        <div class="mb-3">
            <label for="graduation_year" class="form-label">Tahun Lulus:</label>
            <input type="text" class="form-control" value="{{ $employee->graduation_year }}" readonly>
        </div>
        <div class="mb-3">
            <label for="competency_training_place" class="form-label">Tempat Pelatihan Kompetisi:</label>
            <input type="text" class="form-control" value="{{ $employee->competency_training_place }}" readonly>
        </div>
        <div class="mb-3">
            <label for="organizational_experience" class="form-label">Pengalaman Organisasi:</label>
            <input type="text" class="form-control" value="{{ $employee->organizational_experience }}" readonly>
        </div>

        <h5 class="mt-4">Data Keluarga</h5>
        <div class="mb-3">
            <label for="mate_name" class="form-label">Nama Pasangan:</label>
            <input type="text" class="form-control" value="{{ $family->mate_name ?? 'Data tidak tersedia' }}" readonly>
        </div>
        <div class="mb-3">
            <label for="child_name" class="form-label">Nama Anak:</label>
            <input type="text" class="form-control" value="{{ $family->child_name ?? 'Data tidak tersedia' }}" readonly>
        </div>
        <div class="mb-3">
            <label for="wedding_date" class="form-label">Tanggal Pernikahan:</label>
            <input type="text" class="form-control" value="{{ $family->wedding_date ? \Carbon\Carbon::parse($family->wedding_date)->format('d-m-Y') : 'Data tidak tersedia' }}" readonly>
        </div>
        <div class="mb-3">
            <label for="wedding_certificate_number" class="form-label">No Surat Nikah:</label>
            <input type="text" class="form-control" value="{{ $family->wedding_certificate_number ?? 'Data tidak tersedia' }}" readonly>
        </div>

        <a href="{{ route('employee.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
