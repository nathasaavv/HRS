@extends('layouts.app')
@section('tittle', 'Catatan Karyawan')
@section('content')

<div class="card-body">
    <form action="{{ route('records.index') }}" method="GET">

    </form>

    <a href="{{ route('records.create') }}" class="btn btn-success mb-3">
        <i class="fas fa-plus-circle"></i> Tambah Pelanggaran
    </a>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Jenis Pelanggaran</th>
                <th>Tanggal Pelanggaran</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
            <tr>
                <td>{{ $record->id_number }}</td>
                <td>{{ $record->offense_type }}</td>
                <td>{{ $record->offense_date }}</td>
                <td>{{ $record->description }}</td>
                <td>
                    <a href="{{ route('records.show', $record->id) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <a href="{{ route('records.edit', $record->id) }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('records.destroy', $record->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                            <i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete() {
        return confirm('Yakin ingin menghapus?');
    }

    // Inisialisasi Tooltip
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

@endsection
