@extends('layouts.app') <!-- Ganti dengan layout yang kamu gunakan -->

@section('content')
<div class="container">
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/BN.png') }}" alt="Logo" style="width: 150px; height: auto;" class="mr-3">
                <div>
                    <h5 class="card-title">Semangat untuk hari ini!</h5>
                    <p class="card-text">{{ $currentDate }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Karyawan</h5>
                    <p class="card-text">{{ $totalEmployees }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-4">
                <div class="card-body">
                    <h5 class="card-title">Karyawan Aktif</h5>
                    <p class="card-text">{{ $activeEmployees }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-4">
                <div class="card-body">
                    <h5 class="card-title">Karyawan Diarsipkan</h5>
                    <p class="card-text">{{ $archivedEmployees }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Kinerja -->
    {{-- <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Grafik Kinerja Karyawan</h5>
            <canvas id="performanceChart"></canvas>
        </div>
    </div> --}}

    <!-- Profil Kepala Sekolah dan Wakil Kepala Sekolah -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">Profil Kepala Sekolah dan Wakil Kepala Sekolah</h5>
            <div class="row">
                @foreach($leaders as $leader)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset($leader['image']) }}" class="card-img-top" alt="{{ $leader['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $leader['name'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $leader['position'] }}</h6>
                            <p class="card-text">{{ $leader['bio'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- <!-- Include Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('performanceChart').getContext('2d');
    var performanceChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($performanceData['labels']),
            datasets: [{
                label: 'Kinerja',
                data: @json($performanceData['data']),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script> --}}
@endsection
