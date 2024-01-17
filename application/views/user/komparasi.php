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
                                        <option value='<?= $s['deskripsi']; ?>'><?= $s['deskripsi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                        <div class="col-lg-4 col-5">
                            <label for="skenarioDropdown2">Pilih Skenario 2:</label>
                            <select name="skenarioDropdown2" id="skenarioDropdown2">
                                <option value="" selected disabled>Pilih Skenario</option>
                                <?php foreach ($skenario as $s) : ?>
                                    <option value='<?= $s['deskripsi']; ?>'><?= $s['deskripsi']; ?></option>
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
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-8">
                                            <?php if (isset($row['jenis_skenario'])) { ?>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input1']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['lahan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input2']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['alsintan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input3']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengadaan_bibit']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input4']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['persiapan_lahan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input5']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['penanaman']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input6']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['penyulaman']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input7']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemupukan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input8']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengendalian_opt']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input9']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemangkasan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input10']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemanenan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input11']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['lahan_dan_bangunan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input12']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pembersihan_buah']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input13']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pulping']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input14']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['fermentasi']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input15']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pembersih_kopi_hs']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input16']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengeringan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input17']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['hulling']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input18']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['sortasi_greenbean']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan['input19']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengemasan']; ?>/kg greenbean </p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Total Biaya</h5>
                                                        <p class="card-text">Rp <?= $row['total_biaya']; ?></p>
                                                    </div>
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
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input1']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['lahan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input2']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['alsintan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input3']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengadaan_bibit']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input4']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['persiapan_lahan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class=" bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input5']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['penanaman']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input6']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['penyulaman']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input7']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemupukan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input8']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengendalian_opt']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input9']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemangkasan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input10']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pemanenan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input11']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['lahan_dan_bangunan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input12']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pembersihan_buah']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input13']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pulping']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input14']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['fermentasi']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input15']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pembersih_kopi_hs']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input16']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengeringan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input17']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['hulling']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input18']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['sortasi_greenbean']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?= $pertanyaan2['input19']; ?></h5>
                                                        <p class="card-text">Rp <?= $row['pengemasan']; ?>/kg greenbean</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex  justify-content-center"><img src="<?php echo base_url(); ?>assets/dist/img/panah.png" alt="" style="width:30px; margin-top:-12px;"></div>
                                                <div class="card bg-primary">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Total Biaya</h5>
                                                        <p class="card-text">Rp <?= $row['total_biaya']; ?></p>
                                                    </div>
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