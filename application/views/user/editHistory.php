<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <?php foreach ($history as $row) : ?>
                        <h5>Data untuk User: <?= $row['id_user']; ?> </h5>
                    <?php endforeach; ?>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Jenis Skenario</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="jenis_skenario" value="<?= $row['jenis_skenario']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Skenario</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['skenario']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Lahan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['lahan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Alsintan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['alsintan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pengadaan Bibit</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pengadaan_bibit']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Persiapan Lahan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['persiapan_lahan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Penanaman</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['penanaman']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Penyulaman</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['penyulaman']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pemupukan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pemupukan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pengendalian OPT</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pengendalian_opt']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pemangkasan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pemangkasan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pemanenan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pemanenan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Lahan dan Bangunan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['lahan_dan_bangunan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pembersihan Buah</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pembersihan_buah']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pulping</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pulping']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Fermentasi</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['fermentasi']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pembersih Kopi HS</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pembersih_kopi_hs']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pengeringan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pengeringan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Huling</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['hulling']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Sortasi Greenbean</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['sortasi_greenbean']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Pengemasan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['pengemasan']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-md-4">
                            <label for="$labelName" $hideLabel class="col-form-label">Total Biaya</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="skenario" value="<?= $row['total_biaya']; ?>" class="form-control" $disable autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>