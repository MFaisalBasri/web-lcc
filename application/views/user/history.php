<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div>
                <h2>Data History</h2>
                <?= $this->session->flashdata('message'); ?>
                <div class="table" style="overflow-x:auto;">
                    <table class="table table-striped" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Skenario</th>
                                <th scope="col">Skenario</th>
                                <th scope="col">Lahan</th>
                                <th scope="col">Alsintan</th>
                                <th scope="col">Pengadaan Bibit</th>
                                <th scope="col">Persiapan Lahan</th>
                                <th scope="col">Penanaman</th>
                                <th scope="col">Penyulaman</th>
                                <th scope="col">Pemupukan</th>
                                <th scope="col">Pengendalian OPT</th>
                                <th scope="col">Pemangkasan</th>
                                <th scope="col">Pemanenan</th>
                                <th scope="col">Lahan dan Bangunan</th>
                                <th scope="col">Pembersihan Buah</th>
                                <th scope="col">Pulping</th>
                                <th scope="col">Fermentasi</th>
                                <th scope="col">Pembersih Kopi HS</th>
                                <th scope="col">Pengeringan</th>
                                <th scope="col">Hulling</th>
                                <th scope="col">Sortasi</th>
                                <th scope="col">Pengemasan</th>
                                <th scope="col">Total Biaya</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($history as $key => $h) : ?>
                                <tr>
                                    <th scope="row"><?= $key + 1; ?></th>
                                    <td><?= $h['jenis_skenario']; ?></td>
                                    <td><?= $h['skenario']; ?></td>
                                    <td>Rp.<?= $h['lahan']; ?></td>
                                    <td>Rp.<?= $h['alsintan']; ?></td>
                                    <td>Rp.<?= $h['pengadaan_bibit']; ?></td>
                                    <td>Rp.<?= $h['persiapan_lahan']; ?></td>
                                    <td>Rp.<?= $h['penanaman']; ?></td>
                                    <td>Rp.<?= $h['penyulaman']; ?></td>
                                    <td>Rp.<?= $h['pemupukan']; ?></td>
                                    <td>Rp.<?= $h['pengendalian_opt']; ?></td>
                                    <td>Rp.<?= $h['pemangkasan']; ?></td>
                                    <td>Rp.<?= $h['pemanenan']; ?></td>
                                    <td>Rp.<?= $h['lahan_dan_bangunan']; ?></td>
                                    <td>Rp.<?= $h['pembersihan_buah']; ?></td>
                                    <td>Rp.<?= $h['pulping']; ?></td>
                                    <td>Rp.<?= $h['fermentasi']; ?></td>
                                    <td>Rp.<?= $h['pembersih_kopi_hs']; ?></td>
                                    <td>Rp.<?= $h['pengeringan']; ?></td>
                                    <td>Rp.<?= $h['hulling']; ?></td>
                                    <td>Rp.<?= $h['sortasi_greenbean']; ?></td>
                                    <td>Rp.<?= $h['pengemasan']; ?></td>
                                    <td>Rp.<?= $h['total_biaya']; ?></td>
                                    <td>
                                    <td>
                                        <a href="<?php echo base_url('History/ubah/' . $h['id_skenario']); ?>"><span class="badge bg-warning">Edit</span></a>
                                        <a href="<?php echo base_url('History/hapus/' . $h['kode_skenario']); ?>"><span class="badge bg-danger">Clear</span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>