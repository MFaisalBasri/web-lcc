<div class="content-wrapper" style="margin-left: 300px;">
  <div>
    <canvas id="myChart"></canvas>
    <?php
    $labels = [];
    foreach($hasil as $has) :
        $labels[] = $has['jenis_skenario'];
    ?>
    <?php endforeach; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($labels) ?>,
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
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