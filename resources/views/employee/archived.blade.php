@extends('layouts.app')
@section('title', 'Arsip Karyawan')

@section('content')
<div class="card-body">
    <h2>Data Arsip Karyawan</h2>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Lengkap </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id_number }}</td>
                    <td>{{ $item->full_name }}</td>
                    <td>
                        <a href="{{ route('employee.show', ['id' => $item->id_number]) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                            <i class="fas fa-eye"></i> View
                        </a>

                        <form action="{{ route('employee.delete', $item->id_number) }}" method="POST" class="d-inline" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>

                        <form class="d-inline" action="{{ route('employee.unarchive', $item->id_number) }}" method="POST" onsubmit="return confirmUnarchive()">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Unarchive">
                                <i class="fas fa-undo"></i> Unarchive
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
<script>
    function confirmDelete() {
        return confirm('Yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan!');
    }
</script>


<script>
    function confirmArchive() {
        return confirm('Yakin ingin mengarsipkan data ini?');
    }
</script>

<script>
    function confirmUnarchive() {
        return confirm('Yakin ingin mengembalikan data ini dari arsip?');
    }
</script>
@endsection
