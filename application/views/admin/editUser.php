<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-lg-10">
                            <?= $this->session->flashdata('message'); ?>
                            <h1><?php echo $title; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <!-- Profile Image -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">User Profile</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/dist/img/') . $editUser['image']; ?>" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?= $editUser['name']; ?></h3>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right"><?= $editUser['email']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Lokasi</b> <a class="float-right"><?= $editUser['lokasi']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">

                            <?= form_open_multipart('admin/editUser/' . $editUser['id']); ?>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" hidden name="id" value="<?= $editUser['id']; ?>">
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $editUser['email']; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $editUser['name']; ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $editUser['lokasi']; ?>">
                                    <?= form_error('lokasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-sm-2 col-form-label">Role Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="role_id" name="role_id" value="<?= $editUser['role_id']; ?>">
                                    <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="is_active" class="col-sm-2 col-form-label">Aktif</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="is_active" name="is_active" value="<?= $editUser['is_active']; ?>">
                                    <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2"><b> Picture</b> </div>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="<?= base_url('assets/dist/img/') . $editUser['image'] ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Edit</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>

                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url('admin/ubahPassword'); ?>" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" hidden name="id" value="<?= $editUser['id']; ?>">
                                    <label for="new_password1">New Password</label>
                                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="new_password2">Repeat Password</label>
                                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Change
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>