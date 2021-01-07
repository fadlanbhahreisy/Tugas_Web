<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">KPLK Store</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <?php if (session()->get('role') == 0) : ?>
                <li class="menu-header">Barang</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Barang</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= site_url('barang/index') ?>">List Barang</a></li>
                        <li><a class="nav-link" href="<?= site_url('barang/create') ?>">Tambah Barang</a></li>
                    </ul>
                </li>
            <?php else : ?>
                <li class="menu-header">Dashboard</li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= site_url('etalase/index') ?>">etalase</a></li>

                    </ul>
                </li>
            <?php endif ?>
            <li class="active"><a class="nav-link" href="<?= base_url('Auth/login') ?>"><i class="far fa-square"></i> <span>View</span></a></li>




            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="<?= base_url('Auth/logout') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Logout
                </a>
            </div>
    </aside>
</div>