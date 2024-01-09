<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url('assets/img/ebm.png') ?>" alt="AdminLTE Logo" class="brand-image3"
            style="margin-left: 20px">
    </a>
    <div class="sidebar mt-2">
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
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link <?= (current_url() == base_url('dashboard')) ? 'active' : '' ?>"
                        href="<?= base_url('dashboard') ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                            Test 1
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Test 2
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Test 3
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="#">
                        <i class="nav-icon fas fa-wallet"></i>
                        <p>
                            Test 4
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>