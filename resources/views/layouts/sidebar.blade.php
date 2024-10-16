<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMK BN <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-tachometer-alt fa-2x text-gray-300"></i>
        <span>Dashboard</span>
    </a>
</li>


</li>
    @canany(['isAdmin','isManager'])
  <li class="nav-item ">
    <a class="nav-link" href="{{ route('karyawan') }}">
        <i class="fas fa-clipboard-list"></i>
        <span>Data Karyawan</span>
    </a>
</li>
@endcanany
<li class="nav-item">
    <a class="nav-link" href="{{ route('pelanggaran') }}">
        <i class="fas fa-table"></i>
        <span>Data Pelanggaran</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="">
        <i class="fas fa-calendar-check"></i>
        <span>Absensi</span>

    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('employee.archived.list') }}">
        <i class="fas fa-archive"></i>
        <span>Arsip Karyawan</span>
    </a>
</li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>
