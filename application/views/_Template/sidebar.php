<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin<br>E-Agenda</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (strtolower($this->uri->segment(2)) == 'beranda') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url() ?>superadmin/beranda">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Beranda</span></a>
    </li>
    <!-- Nav Item - Agenda -->
    <li class="nav-item <?php if (strtolower($this->uri->segment(2)) == 'agenda') echo 'active' ?>">
        <a class="nav-link" href="<?= base_url() ?>superadmin/agenda">
            <i class="fas fa-fw fa-book"></i>
            <span>Agenda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>