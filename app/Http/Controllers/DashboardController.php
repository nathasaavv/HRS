<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee; // Pastikan model ini sesuai
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->format('l, d F Y');
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::where('is_archived', false)->count();
        $archivedEmployees = Employee::where('is_archived', true)->count();

        // Data untuk grafik kinerja
        $performanceData = [
            'labels' => ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            'data' => [18, 19, 17, 16, 17, 18, 16, 17, 17, 19, 20, 19]
        ];

        $leaders = [
            [
                'name' => 'Bapak Daniel',
                'position' => 'Kepala Sekolah',
                'image' => 'path/to/headmaster.jpg',
                'bio' => ''
            ],
            [
                'name' => 'Ibu Lia',
                'position' => 'Wakil Kepala Sekolah 1',
                'image' => 'path/to/assistant1.jpg',
                'bio' => ''
            ],
            [
                'name' => 'Ibu Lina',
                'position' => 'Wakil Kepala Sekolah 2',
                'image' => 'path/to/assistant2.jpg',
                'bio' => ''
            ],
            [
                'name' => 'Ibu Mega',
                'position' => 'Wakil Kepala Sekolah 3',
                'image' => 'path/to/assistant3.jpg',
                'bio' => ''
            ],
            [
                'name' => 'Ibu Siska',
                'position' => 'Wakil Kepala Sekolah 4',
                'image' => 'path/to/assistant4.jpg',
                'bio' => ''
            ],
            [
                'name' => 'Mr. David Wilson',
                'position' => 'Wakil Kepala Sekolah 5',
                'image' => 'path/to/assistant5.jpg',
                'bio' => ''
            ]
        ];

        return view('dashboard.index', compact('currentDate', 'totalEmployees', 'activeEmployees', 'archivedEmployees', 'performanceData', 'leaders'));
    }
}
