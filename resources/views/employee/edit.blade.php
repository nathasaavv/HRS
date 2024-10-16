@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header text-center">
        <h4>Data Karyawan</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('employee.update', ['id' => $employee->id_number]) }}" method="POST">
        {!! csrf_field() !!}
        @method('PUT')
            <label>NIK</label>
            <input type="text" name="id_number" id="id_number" class="form-control" value="{{ old('id_number', $employee->id_number ?? '') }}" readonly> </br>


            <label>Nama Lengkap</label>
            <input type="text" name="full_name" id="full_name" class="form-control" value="{{ old('full_name', $employee->full_name ?? '') }}"> </br>

            <label>Nama Panggilan</label>
            <input type="text" name="nickname" id="nickname" class="form-control"  value="{{ old('nickname', $employee->nickname ?? '') }}"> </br>

            <label>Tanggal Kontrak</label>
            <input type="date" name="contract_date" id="contract_date" class="form-control"  value="{{ old('contract_date', $employee->contract_date ?? '') }}"> </br>

            <label>Tanggal Kerja</label>
            <input type="date" name="work_date" id="work_date" class="form-control"  value="{{ old('work_date', $employee->work_date ?? '') }}"> </br>

            <label>Status</label> <select name="status" id="status" class="form-control"> <option value="Aktif" {{ old('status', $employee->status ?? '') == 'Aktif' ? 'selected' : '' }}>Aktif</option> <option value="Berhenti" {{ old('status', $employee->status ?? '') == 'Berhenti' ? 'selected' : '' }}>Berhenti</option> </select> <br>

            <label>Jabatan</label>
            <input type="text" name="position" id="position" class="form-control"  value="{{ old('position', $employee->position ?? '') }}"> </br>

            <label>NUPTK</label>
            <input type="number" name="nuptk" id="nuptk" class="form-control"  value="{{ old('nuptk', $employee->nuptk ?? '') }}"> </br>

            <label>Jenis Kelamin</label>
            <select name="gender" id="gender" class="form-control">
                <option value="Laki-laki" {{ old('gender', $employee->gender ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('gender', $employee->gender ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            </br>

            <label>Tempat Lahir</label>
            <input type="text" name="place_birth" id="place_birth" class="form-control"  value="{{ old('place_birth', $employee->place_birth ?? '') }}"> </br>

            <label>Tanggal Lahir</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control"  value="{{ old('birth_date', $employee->birth_date ?? '') }}"> </br>

            <label for="religion">Agama</label>
            <select name="religion" id="religion" class="form-control">
                <option value="">Pilih Agama</option>
                <option value="Kristen" {{ old('religion', $employee->religion ?? '') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                <option value="Katolik" {{ old('religion', $employee->religion ?? '') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                <option value="Islam" {{ old('religion', $employee->religion ?? '') == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Hindu" {{ old('religion', $employee->religion ?? '') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Budha" {{ old('religion', $employee->religion ?? '') == 'Budha' ? 'selected' : '' }}>Budha</option>
                <option value="Konghucu" {{ old('religion', $employee->religion ?? '') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
            </select>
            <br>

            <label>E-mail</label>
            <input type="email" name="email" id="email" class="form-control"  value="{{ old('email', $employee->email ?? '') }}"> </br>

            <label>Hobby</label>
            <input type="text" name="hobby" id="hobby" class="form-control"  value="{{ old('hobby', $employee->hobby ?? '') }}"> </br>

            <label>Status Kawin</label>
            <select name="marital_status" id="marital_status" class="form-control" required>
                <option value="" disabled {{ empty(old('marital_status', $employee->marital_status ?? '')) ? 'selected' : '' }}>Pilih Status Kawin</option>
                <option value="Kawin" {{ old('marital_status', $employee->marital_status ?? '') == 'Kawin' ? 'selected' : '' }}>Kawin</option>
                <option value="Belum Kawin" {{ old('marital_status', $employee->marital_status ?? '') == 'Belum Kawin' ? 'selected' : '' }}>Belum Kawin</option>
            </select>

            </br>

            <label>Alamat Tempat Tinggal</label>
            <input type="text" name="residence_address" id="residence_address" class="form-control"  value="{{ old('residence_address', $employee->residence_address ?? '') }}"> </br>

            <label>Nomor Telepon</label>
            <input type="number" name="phone" id="phone" class="form-control"  value="{{ old('phone', $employee->phone ?? '') }}"> </br>

            <label>Alamat Darurat</label>
            <input type="text" name="address_emergency" id="address_emergency" class="form-control"  value="{{ old('address_emergency', $employee->address_emergency ?? '') }}"> </br>

            <label>Telepon Darurat</label>
            <input type="number" name="phone_emergency" id="phone_emergency" class="form-control"  value="{{ old('phone_emergency', $employee->phone_emergency ?? '') }}"> </br>

            <label>Golongan darah</label>
            <input type="text" name="blood_type" id="blood_type" class="form-control"  value="{{ old('blood_type', $employee->blood_type ?? '') }}"> </br>

            <label>Pendidikan Terakhir</label>
            <input type="text" name="last_education" id="last_education" class="form-control"  value="{{ old('last_education', $employee->last_education ?? '') }}"> </br>

            <label>Agensi</label>
            <input type="text" name="agency" id="agency" class="form-control"  value="{{ old('agency', $employee->agency ?? '') }}"> </br>

            <label>Tahun Lulus</label>
            <input type="text" name="graduation_year" id="graduation_year" class="form-control"  value="{{ old('graduation_year', $employee->graduation_year ?? '') }}"> </br>

            <label>Tempat Pelatihan Kompetisi</label>
            <input type="text" name="competency_training_place" id="competency_training_place" class="form-control"  value="{{ old('competency_training_place', $employee->competency_training_place ?? '') }}">
            </br>

            <label>Pengalaman organisasi</label>
            <input type="text" name="organizational_experience" id="organizational_experience" class="form-control"  value="{{ old('organizational_experience', $employee->organizational_experience ?? '') }}">
            </br>

            <h4>Data Keluarga</h4>

            <label>Nama Pasangan</label>
            <input type="text" name="mate_name" id="mate_name" class="form-control"  value="{{ old('mate_name', $family->mate_name ?? '') }}"> </br>

            <label>Nama Anak</label>
            <input type="text" name="child_name" id="child_name" class="form-control"  value="{{ old('child_name', $family->child_name ?? '') }}"> </br>

            <label>Tanggal Pernikahan</label>
            <input type="date" name="wedding_date" id="wedding_date" class="form-control"  value="{{ old('wedding_date', $family->wedding_date ?? '') }}"> </br>

            <label>No Surat Nikah</label>
            <input type="number" name="wedding_certificate_number" id="wedding_certificate_number" class="form-control"  value="{{ old('wedding_certificate_number', $family->wedding_certificate_number ?? '') }}">
            </br>

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
