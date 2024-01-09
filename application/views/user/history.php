<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div>
                <h2>Data History</h2>
                <div class="table" style="overflow-x:auto;">
                    <table class="table table-striped" style="overflow-x:auto;">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
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
                            <?php foreach ($history as $h) : ?>
                                <tr>
                                    <th scop="row">1</th>
                                    <td><?= $h['skenario']; ?></td>
                                    <td><?= $h['lahan']; ?></td>
                                    <td><?= $h['alsintan']; ?></td>
                                    <td><?= $h['pengadaan_bibit']; ?></td>
                                    <td><?= $h['persiapan_lahan']; ?></td>
                                    <td><?= $h['penanaman']; ?></td>
                                    <td><?= $h['penyulaman']; ?></td>
                                    <td><?= $h['pemupukan']; ?></td>
                                    <td><?= $h['pengendalian_opt']; ?></td>
                                    <td><?= $h['pemangkasan']; ?></td>
                                    <td><?= $h['pemanenan']; ?></td>
                                    <td><?= $h['lahan_dan_bangunan']; ?></td>
                                    <td><?= $h['pembersihan_buah']; ?></td>
                                    <td><?= $h['pulping']; ?></td>
                                    <td><?= $h['fermentasi']; ?></td>
                                    <td><?= $h['pembersih_kopi_hs']; ?></td>
                                    <td><?= $h['pengeringan']; ?></td>
                                    <td><?= $h['hulling']; ?></td>
                                    <td><?= $h['sortasi_greenbean']; ?></td>
                                    <td><?= $h['pengemasan']; ?></td>
                                    <td><?= $h['total_biaya']; ?></td>
                                    <td>
                                        <span class="badge bg-warning">Edit</span>
                                        <span class="badge bg-danger">Clear</span>
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