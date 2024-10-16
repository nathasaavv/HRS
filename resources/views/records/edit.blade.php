@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-center">
        <h4>Edit Data Pelanggaran</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('records.update', $record->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>NIK</label>
            <input type="number" name="id_number" id="id_number" class="form-control" value="{{ $record->id_number }}"> <br>

            <label>Jenis Pelanggaran</label>
            <input type="text" name="offense_type" id="offense_type" class="form-control" value="{{ $record->offense_type }}"> <br>

            <label>Tanggal Pelanggaran</label>
            <input type="date" name="offense_date" id="offense_date" class="form-control" value="{{ $record->offense_date }}"> <br>

            <label>Deskripsi</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $record->description }}"> <br>

            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection
