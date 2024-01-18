<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5>Komparasi Skenario</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5>Komparasi Skenario</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row">
                        <div class="col-lg-5 col-5">
                            <form method="post" action="" id="mainForm1">
                                <label for="skenarioDropdown1">Pilih Skenario 1:</label>
                                <select name="skenarioDropdown1" id="skenarioDropdown1">
                                    <option value="" selected disabled>Pilih Skenario</option>
                                    <?php foreach ($skenario as $s) : ?>
                                        <option value='<?= $s['skenario']; ?>'><?= $s['skenario']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="col-lg-4 col-5">
                            <label for="skenarioDropdown2">Pilih Skenario 2:</label>
                            <select name="skenarioDropdown2" id="skenarioDropdown2">
                                <option value="" selected disabled>Pilih Skenario</option>
                                <?php foreach ($skenario as $s) : ?>
                                    <option value='<?= $s['skenario']; ?>'><?= $s['skenario']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-lg-2 col-2">
                            <input type="submit" class="mt-4 ms-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-5">
                            <?php if (!empty($pertanyaan['deskripsi'])) { ?>
                                <?php foreach ($history as $row) : ?>
                                    <label><?= $row['skenario']; ?></label>
                                    <div class="row d-flex  justify-content-center">
                                        <div class="col-md-8">
                                            <?php if (isset($row['jenis_skenario'])) { ?>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input1']; ?><br> Rp <?= $row['lahan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input2']; ?><br> Rp <?= $row['alsintan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input3']; ?><br> Rp <?= $row['pengadaan_bibit']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input4']; ?><br> Rp <?= $row['persiapan_lahan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input5']; ?><br> Rp <?= $row['penanaman']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input6']; ?><br> Rp <?= $row['penyulaman']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input7']; ?><br> Rp <?= $row['pemupukan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input8']; ?><br> Rp <?= $row['pengendalian_opt']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input9']; ?><br> Rp <?= $row['pemangkasan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input10']; ?><br> Rp <?= $row['pemanenan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input11']; ?><br> Rp <?= $row['lahan_dan_bangunan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input12']; ?><br> Rp <?= $row['pembersihan_buah']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input13']; ?><br> Rp <?= $row['pulping']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input14']; ?><br> Rp <?= $row['fermentasi']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input15']; ?><br> Rp <?= $row['pembersih_kopi_hs']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input16']; ?><br> Rp <?= $row['pengeringan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input17']; ?><br> Rp <?= $row['hulling']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input18']; ?><br> Rp <?= $row['sortasi_greenbean']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan['input19']; ?><br> Rp <?= $row['pengemasan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;">Total Biaya<br> Rp <?= $row['total_biaya']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                            <?php } else { ?>
                                                <p>Data tidak tersedia</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <p>-</p>
                            <?php } ?>
                        </div>
                        <!-- <div class="col-md-1"></div> -->
                        <div class="col-md-5">
                            <?php if (!empty($pertanyaan2['deskripsi'])) { ?>
                                <?php foreach ($history2 as $row) : ?>
                                    <label><?= $row['skenario']; ?></label>
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-8">
                                            <?php if (isset($row['jenis_skenario'])) { ?>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input1']; ?><br> Rp <?= $row['lahan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input2']; ?><br> Rp <?= $row['alsintan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input3']; ?><br> Rp <?= $row['pengadaan_bibit']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input4']; ?><br> Rp <?= $row['persiapan_lahan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input5']; ?><br> Rp <?= $row['penanaman']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input6']; ?><br> Rp <?= $row['penyulaman']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input7']; ?><br> Rp <?= $row['pemupukan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input8']; ?><br> Rp <?= $row['pengendalian_opt']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input9']; ?><br> Rp <?= $row['pemangkasan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input10']; ?><br> Rp <?= $row['pemanenan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input11']; ?><br> Rp <?= $row['lahan_dan_bangunan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input12']; ?><br> Rp <?= $row['pembersihan_buah']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input13']; ?><br> Rp <?= $row['pulping']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input14']; ?><br> Rp <?= $row['fermentasi']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input15']; ?><br> Rp <?= $row['pembersih_kopi_hs']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input16']; ?><br> Rp <?= $row['pengeringan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input17']; ?><br> Rp <?= $row['hulling']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input18']; ?><br> Rp <?= $row['sortasi_greenbean']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;"><?= $pertanyaan2['input19']; ?><br> Rp <?= $row['pengemasan']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                                <div class="d-flex  justify-content-around"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:20px; margin-top:-12px;"></div>
                                                <div class="d-flex  justify-content-center mb-1 p-2">
                                                    <span class="badge rounded-pill" style="max-width: 18rem; background-color:#c7efff;">
                                                        <p style="color: black;">Total Biaya<br> Rp <?= $row['total_biaya']; ?>/kg greenbean</p>
                                                    </span>
                                                </div>
                                            <?php } else { ?>
                                                <p>Data tidak tersedia</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <p>-</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>