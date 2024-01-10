<div class="content-wrapper">
    <section class="content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h5>Perhitungan LCC</h5>
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
                <div class="col-lg-6 col-6">
                    <form method="post" action="" id="mainForm">
                        <label for="skenarioDropdown">Pilih Skenario:</label>
                        <select name="skenarioDropdown" id="skenarioDropdown" onchange="document.getElementById('mainForm').submit();">
                            <option value="" selected disabled>Pilih Skenario</option>
                            <?php foreach ($skenario as $s) : ?>
                                <option value='<?= $s['skenario']; ?>'><?= $s['skenario']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
            </div>
            <div class="row">

                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <?php if (!empty($pertanyaan['skenario'])) {  ?>
                        <h5>Data untuk Skenario: <?= $pertanyaan['skenario']; ?> </h5>
                        <form action="" method="post">
                            <input type="text" name="id" value="<?= $user['id']; ?>" hidden><br>
                            <input type="text" name="0" value="<?= $pertanyaan['skenario']; ?>" hidden><br>

                            <?php for ($i = 1; $i <= 19; $i++) {
                                $labelName = "input" . $i;
                                $disable = ($pertanyaan[$labelName] == "x") ? 'hidden' : '';
                                $hideLabel = ($pertanyaan[$labelName] == "x") ? 'style="display: none;"' : '';

                                echo "<div class=\" row g-3 align-items-center\">
                                    <div class=\"col-md-4\">
                                        <label for=\"$labelName\" $hideLabel class=\"col-form-label\">{$pertanyaan[$labelName]}</label>
                                    </div>
                                    <div class=\"col-md-8\">
                                        <input type=\"text\" name=\"$i\" value=\"\" class=\"form-control\" $disable>
                                    </div>
                                </div>";
                            }
                            echo "<input type=\"submit\" name=\"tambah\" value=\"Calculate\">";
                            ?>
                        </form>
                    <?php } ?>





                </div>
            </div>
    </section>
</div>