<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h5>Komparasi Skenario</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h5>Pilih Skenario Usaha</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-4">
                    <form method="post" action="" id="mainForm">
                        <label for="skenarioDropdown">Pilih Skenario:</label>
                        <select name="skenarioDropdown" id="skenarioDropdown" onchange="document.getElementById('mainForm').submit();">
                            <option value="" selected disabled>Pilih Skenario</option>
                            <?php foreach ($skenario as $s) : ?>
                                <option value='<?= $s['deskripsi']; ?>'><?= $s['deskripsi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
                <div class="col-lg-4 col-4">
                    <form method="post" action="" id="mainForm">
                        <label for="skenarioDropdown">Pilih Skenario:</label>
                        <select name="skenarioDropdown" id="skenarioDropdown" onchange="document.getElementById('mainForm').submit();">
                            <option value="" selected disabled>Pilih Skenario</option>
                            <?php foreach ($skenario as $s) : ?>
                                <option value='<?= $s['deskripsi']; ?>'><?= $s['deskripsi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
            </div>
            <!-- <div class="row">

                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <?php if (!empty($pertanyaan['deskripsi'])) {  ?>
                        <h5>Data untuk Skenario: <?= $pertanyaan['deskripsi']; ?> </h5>
                        <form action="" method="post">
                            <input type="text" name="id_skenario" value="<?= $pertanyaan['id_skenario']; ?>" hidden><br>
                            <input type="text" name="id_user" value="<?= $user['id']; ?>" hidden><br>
                            <input type="text" name="jenis_skenario" value="<?= $pertanyaan['skenario']; ?>"><br>
                            <input type="text" name="0" value="<?= $pertanyaan['deskripsi']; ?>" hidden><br>
                            <?php $totalValue = 0; ?>
                            <?php for ($i = 1; $i <= 19; $i++) {
                                $labelName = "input" . $i;
                                $disable = ($pertanyaan[$labelName] == "x") ? 'hidden' : '';
                                $hideLabel = ($pertanyaan[$labelName] == "x") ? 'style="display: none;"' : '';

                                echo "<div class=\" row g-3 align-items-center\">
                                    <div class=\"col-md-4\">
                                        <label for=\"$labelName\" $hideLabel class=\"col-form-label\">{$pertanyaan[$labelName]}</label>
                                    </div>
                                    <div class=\"col-md-8\">
                                        <input type=\"text\" name=\"$i\" value=\"\" class=\"form-control\" $disable autocomplete=\"off\">
                                    </div>
                                </div>";
                            }
                            echo "<input type=\"text\" name=\"20\" value=\"$totalValue\" hidden>";
                            echo "<input type=\"submit\" name=\"tambah\" value=\"Calculate\" class=\"mt-3\">";
                            ?>
                        </form>
                    <?php } ?>

                </div>
            </div> -->
    </section>
</div>