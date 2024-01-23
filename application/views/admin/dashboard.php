<div class="content-wrapper">

  <section class="content-header">
    <div>
      <h1><?= $title; ?></h1>
    </div>


  </section>
  <section class="content">
    <div class="container-fluid">

      <div class="row">

        <div class="col-lg-4 col-12">
          <?php
          $role_id = $user['role_id'] ?? 0;

          $role = ($role_id == 1) ? 'Administrator' : 'User';
          ?>
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h3><?= $role; ?></h3>
              <p>Role</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-12">
          <?php
          if (!isset($totalAdmin)) {
            $totalAdmin = 0;
          }
          ?>
          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h3><?= $totalAdmin; ?></h3>
              <p>Jumlah Admin</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-12">
          <?php
          if (!isset($totalUser)) {
            $totalUser = 0;
          }
          ?>
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-body">
              <h3><?= $totalUser; ?></h3>
              <p>Jumlah User</p>
            </div>
          </div>
        </div>
      </div>
      <section class="content">

        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
              <li class="nav-item">
                <a class="nav-link active">Deskripsi</a>
              </li>
            </ul>
          </div>

          <div class="card-body">
            <h1 class="card-title"><i><b>Life Cycle Cost Software </i></b> </h1>
            <br>
            <hr>

            <p class="card-text">
              <i>Life Cycle Cost</i> (LCC) adalah metode perhitungan total biaya selama siklus hidup produksi. LCC merupakan penilaian ekonomi cradle-to-gate, yaitu siklus produksi yang dimulai dari bahan mentah hingga produk jadi. Dalam perancangan usaha kopi, analisis LCC terdiri atas biaya fase budidaya dan fase pascapanen. Analisis LCC digunakan untuk menghitung, mengevaluasi dan membandingkan biaya total usaha produksi kopi sehingga dapat membantu mengambil pertimbangan/keputusan bagi pengguna.
            </p>

            <hr>
            <div class="row">

              <div class="col col-lg-4 col-12 d-flex justify-content-center">
                <div class="card" style="width:100%" class="mx-auto">
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/dist/img/kopi-1.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Gambar 1. <b>Proses Penyemaian</b></p>
                  </div>
                </div>
              </div>

              <div class="col col-lg-4 col-12 d-flex justify-content-center">
                <div class="card" style="width:100%" class="mx-auto">
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/dist/img/kopi-2.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Gambar 2. <b>Proses Budidaya kopi</b></p>
                  </div>
                </div>
              </div>

              <div class="col col-lg-4 col-12 d-flex justify-content-center">
                <div class="card" style="width:100%" class="mx-auto">
                  <img class="card-img-top" src="<?php echo base_url(); ?>assets/dist/img/kopi-3.png" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text">Gambar 3. <b>Proses Pemanenan kopi</b> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</div>