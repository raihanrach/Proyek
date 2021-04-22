<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POSPOR JTI</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- JUDULNYA -->
    <div class="sidebar-heading my-0">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- JUDULNYA -->
    <div class="sidebar-heading">
        user
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('daftar_dosen'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Daftar Dosen</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('daftar_dosen/data_dosen'); ?>">
            <i class="fas fa-fw fa-address-card"></i>
            <span>Data Dosen</span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('daftar_mahasiswa'); ?>">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Daftar Mahasiswa</span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('tugas_akhir'); ?>">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Tugas Akhir</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('mahasiswa_bimbingan'); ?>">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Mahasiswa Bimbingan</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('profil_saya_admin'); ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Profil Saya</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('admin/edit'); ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Edit Profile</span>
        </a>
    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->