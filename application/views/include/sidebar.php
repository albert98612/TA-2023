<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>dashboard" class="brand-link">
        <img src="<?= base_url(); ?>assets/dist/img/AdminLTELogo.png" alt="Cv. Lestari Galvanis Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cv. Lestari Galvanis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url(); ?>assets/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="javascript:;" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dashboard" class="nav-link <?= ($active_page === 'dashboard') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dataproduk" class="nav-link <?= ($active_page === 'pendataan') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Pendataan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>penjadwalan" class="nav-link <?= ($active_page === 'penjadwalan') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-calendar-days"></i>
                        <p>
                            Informasi Produksi
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>bahanbaku/stok" class="nav-link <?= ($active_page === 'stokbahanbaku') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-boxes-stacked"></i>
                        <p>
                            Stok Bahan Baku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>larutan/stok" class="nav-link <?= ($active_page === 'stoklarutan') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-flask"></i>
                        <p>
                            Stok Larutan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>bahanbaku/pembelian" class="nav-link <?= ($active_page === 'pembelianbahanbaku') ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            Pembelian Bahan Baku
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>dataproduk/penjualan" class="nav-link <?= ($active_page === 'penjualan') ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            Penjualan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>larutan/produksi" class="nav-link <?= ($active_page === 'produksilarutanep') ? 'active' : ''; ?>">
                        <i class="nav-icon far fa-circle"></i>
                        <p>
                            Produksi Larutan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Produksi Electro Plating
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>larutan/pembersihan" class="nav-link <?= ($active_page === 'pembersihan') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pembersihan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>larutan/perendaman" class="nav-link <?= ($active_page === 'perendaman') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Perendaman
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>larutan/pewarnaan" class="nav-link <?= ($active_page === 'pewarnaan') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pewarnaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>larutan/penjemuran" class="nav-link <?= ($active_page === 'penjemuran') ? 'active' : ''; ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penjemuran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url(); ?>user" class="nav-link <?= ($active_page === 'user') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>