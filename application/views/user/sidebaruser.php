<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary bg-success elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link" style="text-decoration:none;">
    <!-- <img src="<?php echo base_url(); ?>assets/dist/img/lcamaster.png" alt="lcamaster" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <i class="nav-icon fas fa-circle"></i>
    <span class="brand-text font-weight-light">Life Cycle Cost</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item text-primary">
          <a href="<?= base_url('dashboard') ?>" class="nav-link <?= $title == 'Dashboard' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('myprofile') ?>" class="nav-link <?= $title == 'Profile' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-fw fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('skenario') ?>" class="nav-link <?= $title == 'Skenario Usaha' ? 'active' : ''; ?>">
            <i class="nav-icon fas fa-circle"></i>
            <p>
              Skenario Usaha
            </p>
          </a>
        </li>
        <li class="nav-item <?= $title == 'Input Data' || $title == 'Data History' ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Data
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('inputdata') ?>" class="nav-link <?= $title == 'Input Data' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Input Data</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('history') ?>" class="nav-link <?= $title == 'Data History' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Data History</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?= $title == 'Rekapitulasi' || $title == 'Komparasi' ? 'menu-open' : ''; ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Interpretasi
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('rekapitulasi') ?>" class="nav-link <?= $title == 'Rekapitulasi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekapitulasi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('komparasi') ?>" class="nav-link <?= $title == 'Komparasi' ? 'active' : ''; ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Komparasi</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
<script>
  $(document).ready(function() {
    let li_elem = $()
    if ($(".subMenu").has('ul').length) {
      $(".icon-check").addClass('fa-angle-left right');
    }
  });
</script>