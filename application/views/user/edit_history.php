<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div class="row">

                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <?php  foreach ($hasil as $tot) : ?>
                        <h5>Data untuk Skenario: <?= $tot['skenario']; ?> </h5>
                        <?php endforeach; ?>  
                        <!-- <form action="" method="post">
                            <input type="text" name="id_skenario" value="<?= $pertanyaan['id_skenario']; ?>" hidden><br>
                            <input type="text" name="id_user" value="<?= $user['id']; ?>" hidden><br>
                            <input type="text" name="jenis_skenario" value="<?= $pertanyaan['skenario']; ?>"><br>
                            <input type="text" name="0" value="<?= $pertanyaan['deskripsi']; ?>" hidden><br>
                        </form> -->
                </div>
            </div>
    </section>
</div>