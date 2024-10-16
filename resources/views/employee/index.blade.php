@extends('layouts.app')
@section('title', 'Data Karyawan')

@section('content')
<div class="card-body">
    <div class="table-responsive">
        <div class="pb-3">
            <a class="btn btn-success" href="{{ route('employee.create') }}">
                <i class="fas fa-user-plus"></i> Tambah Karyawan
            </a>
        </div>

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0" style="border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f8f9fa;">
                    <th class="col-md-1" style="border: none;">No</th>
                    <th class="col-md-1" style="border: none;">NIK</th>
                    <th class="col-md-3" style="border: none;">Nama Lengkap</th>
                    <th class="col-md-2" style="border: none;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>

                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->id_number }}</td>
                        <td>{{ $item->full_name }}</td>
                        <td>

                           
                            <a href="{{ url('employee/' . $item->id_number . '/edit') }}" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form class="d-inline" action="{{ route('employee.archived', $item->id_number) }}" method="POST" onsubmit="return confirmArchive()">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="submit" class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Arsipkan">
                                    <i class="fas fa-archive"></i> Archive
                                </button>
                            </form>



                            <a href="{{ route('employee.show', ['id' => $item->id_number]) }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                <i class="fas fa-eye"></i> View
                            </a>
                        </td>

                    </tr>
                    <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function confirmArchive() {
        return confirm('Yakin ingin mengarsipkan data ini?');
    }

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
@endsection
