@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-center">
        <h4>Tambah Data Pelanggaran</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('records.store') }}" method="POST">
            @csrf

            <label>NIK</label>
            <input type="number" name="id_number" id="id_number" class="form-control"> <br>

            <label>Jenis Pelanggaran</label>
            <input type="text" name="offense_type" id="offense_type" class="form-control"> <br>

            <label>Tanggal Pelanggaran</label>
            <input type="date" name="offense_date" id="offense_date" class="form-control"> <br>

            <label>Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control"> <br>

            <input type="submit" value="Submit" class="btn btn-success">
        </form>
    </div>
</div>
@endsection
