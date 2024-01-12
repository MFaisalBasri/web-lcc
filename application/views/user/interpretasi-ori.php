<!-- <?php
if (!isset($_GET['dampak'])) {
  $_GET['dampak'] = "GWP";
}

if (!isset($_GET['tahun'])) {
  $_GET['tahun'] = "2020";
}
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script type="text/javascript">
  function random_rgba() {
    var o = Math.round,
      r = Math.random,
      s = 255;
    return 'rgba(' + o(r() * s) + ',' + o(r() * s) + ',' + o(r() * s) + ',' + r().toFixed(1) + ')';
  }


  let warnaArr = [];


  let prosesArr = []
  let materialArr = []
  let jumlahArr = []
  let proses = []
  let jumlahProses = []

  <?php foreach ($arrProses as $rowProses) { ?>
    console.log('<?php echo $rowProses; ?>')
    prosesArr.push('<?php echo $rowProses; ?>')

  <?php } ?>

  <?php foreach ($arrMaterial as $rowMaterial) { ?>
    console.log('<?php echo $rowMaterial; ?>')
    materialArr.push('<?php echo $rowMaterial; ?>')
    warnaArr.push(random_rgba())
  <?php } ?>

  <?php foreach ($arrJumlah as $rowJumlah) { ?>
    console.log('<?php echo $rowJumlah; ?>')
    jumlahArr.push('<?php echo $rowJumlah; ?>')

  <?php } ?>

  <?php foreach ($jumlahProses as $key => $value) { ?>
    proses.push('<?php echo $key; ?>')
    jumlahProses.push('<?php echo $value; ?>')
  <?php } ?>



  console.log('proses: ' + prosesArr)
  console.log('material: ' + materialArr)
  console.log('jumlah: ' + jumlahArr)
  console.log('jumlah proses: ' + jumlahProses)
  console.log('proses unique: ' + proses)
</script>

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header border-0">
            <div class="d-flex justify-content-between">
              <h3 class="card-title">Bar Chart</h3>
            </div>
          </div>
          <div class="card-body" align="center">
            <div>
              <h1 class="m-0">Perbandingan LCC untuk setiap Skenario</h1>
              <?php $no = 0;
              foreach ($jumlahProses as $key => $value) { ?>
                <center>
                  <!-- <h3><?php echo $key; ?></h3> -->
                </center>
                <canvas id="barChart<?php echo $no + 1; ?>" width="700px" height="400px"></canvas>
                <br>

                <script></script>



              <?php $no++;
              } ?>

            </div>
          </div>
        </div>

      </div>
      <!-- <div class="col-lg-2"></div> -->
    </div>

  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  let j = 0;

  let barCanvas = [];
  let barChart = [];

  let pieCanvas = [];
  let pieChart = [];

  console.log('warna: ' + warnaArr.length)

  for (let i = 0; i < jumlahProses.length; i++) {

    console.log("i: " + i)
    console.log("j: " + j)
    console.log('jumlahProses[i]: ' + jumlahProses[i])



    console.log(materialArr.slice(j, jumlahProses[i]))
    console.log(jumlahArr.slice(j, jumlahProses[i]))
    console.log("koma " + jumlahArr.slice(j, j + parseInt(jumlahProses[i])).map(Number))
    console.log("warnaArr: " + j, (j + parseInt(jumlahProses[i])))
    barCanvas[i] = document.getElementById('barChart' + (i + 1)).getContext('2d');
    barChart[i] = new Chart(barCanvas[i], {
      type: 'bar',
      data: {
        labels: materialArr.slice(j, j + parseInt(jumlahProses[i])),
        datasets: [{
          label: "Dampak",
          data: jumlahArr.slice(j, j + parseInt(jumlahProses[i])),
          backgroundColor: warnaArr.slice(j, j + parseInt(jumlahProses[i])),

          borderColor: warnaArr.slice(j, j + parseInt(jumlahProses[i])),

          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        // indexAxis: 'y',
        plugins: {
          datalabels: {
            color: 'red',
            align: 'right',
            anchor: 'end',
            formatter: function(value, context) {
              console.log(context)
              return value
            }
          },
          tooltip: {
            mode: 'index',
            callbacks: {
              label: function(tooltipItem, data) {
                return barChart[i].data.datasets[tooltipItem.datasetIndex].data[tooltipItem.dataIndex]
              }
            }
          },
          legend: {
            display: false,
            // position: 'bottom'
          }
        },
        responsive: false,
        // maintainAspectRatio: true,
        // scales: {
        //   xAxes: {
        //     type: 'logarithmic',
        //   },
        // }
      }
    });

    /* Chart.register(ChartDataLabels); */

    pieCanvas[i] = document.getElementById('pieChart' + (i + 1)).getContext('2d');
    pieChart[i] = new Chart(pieCanvas[i], {
      type: 'pie',
      data: {
        labels: materialArr.slice(j, j + parseInt(jumlahProses[i])),
        datasets: [{
          data: jumlahArr.slice(j, j + parseInt(jumlahProses[i])),
          backgroundColor: warnaArr.slice(j, j + parseInt(jumlahProses[i])),
          // backgroundColor: [
          //     'rgba(255, 99, 132, 0.2)',
          //     'rgba(54, 162, 235, 0.2)',
          //     'rgba(255, 206, 86, 0.2)',
          // ],
          borderColor: warnaArr.slice(j, j + parseInt(jumlahProses[i])),
          // borderColor: [
          //     'rgba(255, 99, 132, 1)',
          //     'rgba(54, 162, 235, 1)',
          //     'rgba(255, 206, 86, 1)',
          // ],
          borderWidth: 1
        }]
      },
      options: {
        plugins: {
          tooltip: {
            mode: 'index',
            callbacks: {
              label: function(tooltipItem, data) {
                let total = 0;
                for (let a = 0; a < pieChart[i].data.datasets[tooltipItem.datasetIndex].data.length; a++) {
                  total += parseFloat(pieChart[i].data.datasets[tooltipItem.datasetIndex].data[a]);
                }
                console.log('total: ' + total)
                return parseFloat(pieChart[i].data.datasets[tooltipItem.datasetIndex].data[tooltipItem.dataIndex]) / total * 100 + "%"
              }
            }
          },
          legend: {
            position: 'bottom'
          }
        },
        responsive: false,
        // maintainAspectRatio: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
    console.log(materialArr)
    j = j + parseInt(jumlahProses[i])
  }

  // barCanvas = document.getElementById('barChart1').getContext('2d');
  // barChart = new Chart(barCanvas, {
  //     type: 'bar',
  //     data: {
  //         labels: materialArr.slice(0,2),
  //         datasets: [{
  //             label: null,
  //             data: jumlahArr.slice(0,2),
  //             backgroundColor: warnaArr.slice(0,2),

  //             borderColor: warnaArr.slice(0,2),

  //             borderWidth: 1
  //         }]
  //     },
  //     options: {
  //       tooltips: {
  //         mode: 'index'
  //       },
  //       indexAxis: 'y',
  //       plugins: {
  //         legend: {
  //           display: false,
  //           // position: 'bottom'
  //         }
  //       },
  //       responsive: false,
  //       // maintainAspectRatio: true,
  //         scales: {
  //             x: {
  //               type: 'logarithmic',
  //             }
  //         }
  //     }
  // });


  // barCanvas = document.getElementById('barChart2').getContext('2d');
  // barChart = new Chart(barCanvas, {
  //     type: 'bar',
  //     data: {
  //         labels: materialArr.slice(2,3),
  //         datasets: [{
  //             label: null,
  //             data: jumlahArr.slice(2,3),
  //             backgroundColor: warnaArr.slice(2,3),

  //             borderColor: warnaArr.slice(2,3),

  //             borderWidth: 1
  //         }]
  //     },
  //     options: {
  //       tooltips: {
  //         mode: 'index'
  //       },
  //       indexAxis: 'y',
  //       plugins: {
  //         legend: {
  //           display: false,
  //           // position: 'bottom'
  //         }
  //       },
  //       responsive: false,
  //       // maintainAspectRatio: true,
  //         scales: {
  //             x: {
  //               type: 'logarithmic',
  //             }
  //         }
  //     }
  // });
</script> -->