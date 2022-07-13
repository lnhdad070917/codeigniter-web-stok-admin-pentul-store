<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="user/dash-admin.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url() . 'admin/index' ?>">
                <i class="bi bi-grid"></i>
                <span>Admin</span>
            </a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="tables-user.php">
                <i class="bi bi-person"></i>
                <span>User</span>
            </a>
        </li>End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url() . 'admin/form_rdp' ?>">
                        <i class="bi bi-circle"></i><span>RDP</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'admin/form_vps' ?>">
                        <i class="bi bi-circle"></i><span>VPS</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'admin/form_panel' ?>">
                        <i class="bi bi-circle"></i><span>Panel</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#rdp-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Stok</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="rdp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo base_url() . 'admin/stok_rdp' ?>">
                        <i class="bi bi-circle"></i><span>RDP</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'admin/stok_vps' ?>">
                        <i class="bi bi-circle"></i><span>VPS</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() . 'admin/stok_panel' ?>">
                        <i class="bi bi-circle"></i><span>Panel</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside><!-- End Sidebar-->