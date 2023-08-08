<?php
$index = $desaingrafis = $editvideo = $web = '';
?>

@if (Request::segment(2) == '')
    <?php $index = 'active'; ?>
@elseif (Request::segment(2) == 'desaingrafis')
    <?php $desaingrafis = 'active'; ?>
@elseif (Request::segment(2) == 'editvideo')
    <?php $editvideo = 'active'; ?>
@elseif (Request::segment(2) == 'web')
    <?php $web = 'active'; ?>
@endif

<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">DR - Admin</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item <?= $index ?>">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Menu Utama</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">Menu</div>
        <li class="nav-item <?= $desaingrafis ?>">
            <a class="nav-link" href="/admin/desaingrafis">
                <i class="fa-solid fa-image"></i>
                <span>Desain Grafis</span>
            </a>
        </li>
        <li class="nav-item <?= $editvideo ?>">
            <a class="nav-link" href="/admin/editvideo">
                <i class="fa-solid fa-photo-film"></i>
                <span>Edit Video</span>
            </a>
        </li>
        <li class="nav-item <?= $web ?>">
            <a class="nav-link" href="/admin/web">
                <i class="fa-solid fa-tablet-screen-button"></i>
                <span>Web & UI/UX</span>
            </a>
        </li>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light topbar static-top mb-4 bg-white shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline ml-md-3 my-md-0 mw-100 navbar-search my-2 mr-auto">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light small border-0" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in p-3 shadow" aria-labelledby="searchDropdown">
                            <form class="form-inline w-100 navbar-search mr-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light small border-0" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item no-arrow my-auto mx-1">
                        <a href="/" class="btn btn-outline-primary">Kunjungi Website</a>
                    </li>


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline small mr-2 text-gray-600">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in shadow" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>

            <div class="container-fluid">
