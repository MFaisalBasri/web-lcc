<div class="content-wrapper">
  <section class="content" style="overflow-x: hidden;">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-10 col-12">
        <div>
          <canvas id="myChart"></canvas>
          <?php
          $labels = [];
          foreach ($total as $has) :
            $labels[] = $has['jenis_skenario'];
          endforeach;
          ?>
          <?php
          $data = [];
          foreach ($total as $tot) :
            $data[] = $tot['total_biaya'];
          endforeach;
          ?>
        </div>
      </div>
    </div>

    <div class="row d-flex justify-content-center mt-4 mb-5">
      <div class="col-lg-8 col-12">
        <div class="card bg-light mb-3" style="max-width: 32rem;">
          <div class="card-body">
            <?php foreach ($max as $row) : ?>
              <?php foreach ($min as $rowMin) : ?>
                <p>Produksi dengan Life Cycle Cost terendah terdapat pada skenario usaha X (<?= $rowMin['skenario']; ?>) sebesar Rp.<?= $rowMin['total_biaya']; ?>
                  Produksi dengan Life Cycle Cost tertinggi terdapat pada skenario usaha Y (<?= $row['skenario']; ?>) sebesar Rp.<?= $row['total_biaya']; ?>
                </p>
              <?php endforeach; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($labels) ?>,
      datasets: [{
        label: 'Skenario',
        data: <?= json_encode($data) ?>,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>