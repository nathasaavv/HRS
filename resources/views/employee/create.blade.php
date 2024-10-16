@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header text-center">
        <h4>Data Karyawan</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('employee.store') }}" method="POST">
            {!! csrf_field() !!}

            <label>NIK</label>
            <input type="number" name="id_number" id="id_number" class="form-control"> </br>

            <label>Nama Lengkap</label>
            <input type="text" name="full_name" id="full_name" class="form-control"> </br>

            <label>Nama Panggilan</label>
            <input type="text" name="nickname" id="nickname" class="form-control"> </br>

            <label>Tanggal Kontrak</label>
            <input type="date" name="contract_date" id="contract_date" class="form-control"> </br>

            <label>Tanggal Kerja</label>
            <input type="date" name="work_date" id="work_date" class="form-control"> </br>

            <label>Status</label>
            <select name="status" id="status" class="form-control">
                <option value="Aktif">Aktif</option>
                <option value="Berhenti">Berhenti</option>

            </select> </br>
            <label>Jabatan</label>
            <input type="text" name="position" id="position" class="form-control"> </br>

            <label>NUPTK</label>
            <input type="number" name="nuptk" id="nuptk" class="form-control"> </br>

            <label>Jenis Kelamin</label>
            <select name="gender" id="gender" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>

            </select> </br>

            <label>Tempat Lahir</label>
            <input type="text" name="place_birth" id="place_birth" class="form-control"> </br>

            <label>Tanggal Lahir</label>
            <input type="date" name="birth_date" id="birth_date" class="form-control"> </br>

            <label>Agama</label>
            <select name="religion" id="religion" class="form-control">
                <option value="">Pilih Agama</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
            </br>


            <label>E-mail</label>
            <input type="email" name="email" id="email" class="form-control"> </br>

            <label>Hobby</label>
            <input type="text" name="hobby" id="hobby" class="form-control"> </br>

            <label>Status Kawin</label>
            <select name="marital_status" id="marital_status" class="form-control">
                <option value="Kawin">Kawin</option>
                <option value=" Belum Kawin">Belum Kawin</option>
            </select>
            </br>

            <label>Alamat Tempat Tinggal</label>
            <input type="text" name="residence_address" id="residence_address" class="form-control"> </br>

            <label>Nomor Telepon</label>
            <input type="number" name="phone" id="phone" class="form-control"> </br>

            <label>Alamat Darurat</label>
            <input type="text" name="address_emergency" id="address_emergency" class="form-control"> </br>

            <label>Telepon Darurat</label>
            <input type="number" name="phone_emergency" id="phone_emergency" class="form-control"> </br>

            <label>Golongan darah</label>
            <input type="text" name="blood_type" id="blood_type" class="form-control"> </br>

            <label>Pendidikan Terakhir</label>
            <input type="text" name="last_education" id="last_education" class="form-control"> </br>

            <label>Agensi</label>
            <input type="text" name="agency" id="agency" class="form-control"> </br>

            <label>Tahun Lulus</label>
            <input type="text" name="graduation_year" id="graduation_year" class="form-control"> </br>

            <label>Tempat Pelatihan Kompetisi</label>
            <input type="text" name="competency_training_place" id="competency_training_place" class="form-control">
            </br>

            <label>Pengalaman organisasi</label>
            <input type="text" name="organizational_experience" id="organizational_experience" class="form-control">
            </br>
            <h4>Data Pribadi</h4>


            <label>Nama Pasangan</label>
            <input type="text" name="mate_name" id="mate_name" class="form-control"> </br>

            <label>Nama Anak</label>
            <input type="text" name="child_name" id="child_name" class="form-control"> </br>

            <label>Tanggal Pernikahan</label>
            <input type="date" name="wedding_date" id="wedding_date" class="form-control"> </br>

            <label>No Surat Nikah</label>
            <input type="number" name="wedding_certificate_number" id="wedding_certificate_number" class="form-control">
            </br>

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</div>

@endsection
