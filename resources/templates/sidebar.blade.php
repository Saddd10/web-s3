<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-spinner"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><sup>Out</sup>Fact</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link"  href="<?php echo base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Style as Identity
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kategori/pakaian_pria') ?>">
                    <i class="fas fa-fw fa-mars"></i>
                    <span>Seminar Kemajuan Disertasi 1 (DSR-II)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kategori/pakaian_wanita') ?>">
                    <i class="fas fa-fw fa-venus"></i>
                    <span>Seminar Kemajuan Disertasi 2 (DSR-III)</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="<?= base_url('assets/img/undraw_spin.svg') ?>" alt="...">
                <p class="text-center mb-2"><strong>OutFact</strong> is packed with premium clothes, shoes, and more!</p>
                <a class="btn btn-success btn-sm" href=#>Find More About Us</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!--  Dropdown - Cart  -->
                        <div class="navbar">
                            <ul class="navbar navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = 'Cart: '.$this->cart->total_items(). ' items'
                                    ?>

                                    <?php echo anchor('dashboard/cart_detail', $keranjang) ?>
                                </li>
                            </ul>
                            <div class="topbar-divider d-none d-sm-block"></div>
                        <ul class="navbar-nav">
                            <?php if($this->session->userdata('username')) { ?>
                                <li class="mr-3"><div>Selamat Datang <?php echo $this->session->userdata('username') ?></div></li>
                                <li> <?php echo anchor('auth/logout', 'Logout') ?></li>
                            <?php } else { ?>
                                <li> <?php echo anchor('auth/login', 'Login') ?></li>
                            <?php } ?>
                        </ul>
                        </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->