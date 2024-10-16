@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-center">
        <h4>Detail Data Pelanggaran</h4>
    </div>
    <div class="card-body">
        <p><strong>NIK:</strong> {{ $record->id_number }}</p>
        <p><strong>Jenis Pelanggaran:</strong> {{ $record->offense_type }}</p>
        <p><strong>Tanggal Pelanggaran:</strong> {{ $record->offense_date }}</p>
        <p><strong>Deskripsi:</strong> {{ $record->description }}</p>
        <a href="{{ route('records.index') }}" class="btn btn-primary">Kembali</a>
    </div>
</div>
@endsection
