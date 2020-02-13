        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link text-center">
                <span class="brand-text font-weight-bold">BnD Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('vendor/AdminLTE/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <?php $url = $this->uri->segment(2); ?>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="<?= base_url('/admin/dashboard') ?>" class="nav-link 
                            <?php if ($url == 'dashboard') {
                                echo 'active';
                            } ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="<?= base_url('/admin/databarang') ?>" class="nav-link 
                            <?php if ($url == 'databarang') {
                                echo 'active';
                            } ?>">
                                <i class="nav-icon fas fa-clipboard"></i>
                                <p>
                                    Data Barang
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link
                            <?php if ($url == 'administrator') {
                                echo 'active';
                            } ?>">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Administrator
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>