<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div>
                <h2>Data User</h2>
                <?= $this->session->flashdata('message'); ?>
                <div class="container tbl-container" style="overflow-x:auto;">
                    <div class="row tbl-fixed">
                        <table class="table table-condensed table-light" id="tabel-data example" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Role Id</th>
                                    <th scope="col">Aktif</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataAdmin as $key => $user) : ?>
                                    <tr>
                                        <td scope="row"><?= $key + 1; ?></td>
                                        <td><?= $user['name']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td><?= $user['password']; ?></td>
                                        <td><?= $user['role_id']; ?></td>
                                        <td><?= $user['is_active']; ?></td>
                                        <td><?= $user['lokasi']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/editAdmin/' . $user['id']); ?>"><span class="badge bg-warning">Edit</span></a>
                                            <a href="<?php echo base_url('History/hapus/' . $user['id']); ?>"><span class="badge bg-danger">Clear</span></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>