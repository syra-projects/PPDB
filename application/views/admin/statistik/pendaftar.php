<p class="card-title">Jumlah Data Pendaftaran</p>
<p class="mb-4">Grafik Statistik Data Pendaftaran Tahun <?php echo $v_thn; ?>/<?php echo $v_thn+1; ?></p>
<div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3"></div>
<canvas id="cash-deposits-chart"></canvas>
<script>
  (function($) {
    'use strict';
    $(function() {

      if ($('#cash-deposits-chart').length) {
        var cashDepositsCanvas = $("#cash-deposits-chart").get(0).getContext("2d");
        var data = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'],
          datasets: [
            {
              label: 'Data Pendaftaran Perbulan',
              data: <?php echo json_encode($grafik); ?>,
              borderColor: [
                '#ffc100'
              ],
              borderWidth: 2,
              fill: false,
              pointBackgroundColor: "#fff"
            }
          ]
        };
        var options = {
          scales: {
            yAxes: [{
              display: true,
              gridLines: {
                drawBorder: false,
                lineWidth: 1,
                color: "#e9e9e9",
                zeroLineColor: "#e9e9e9",
              },
              ticks: {
                min: 0,
                max: 100,
                stepSize: 20,
                fontColor: "#6c7383",
                fontSize: 16,
                fontStyle: 300,
                padding: 15
              }
            }],
            xAxes: [{
              display: true,
              gridLines: {
                drawBorder: false,
                lineWidth: 1,
                color: "#e9e9e9",
              },
              ticks : {
                fontColor: "#6c7383",
                fontSize: 16,
                fontStyle: 300,
                padding: 15
              }
            }]
          },
          legend: {
            display: false
          },
          legendCallback: function(chart) {
            var text = [];
            text.push('<ul class="dashboard-chart-legend">');
            for(var i=0; i < chart.data.datasets.length; i++) {
              text.push('<li><span style="background-color: ' + chart.data.datasets[i].borderColor[0] + ' "></span>');
              if (chart.data.datasets[i].label) {
                text.push(chart.data.datasets[i].label);
              }
            }
            text.push('</ul>');
            return text.join("");
          },
          elements: {
            point: {
              radius: 3
            },
            line :{
              tension: 0
            }
          },
          stepsize: 1,
          layout : {
            padding : {
              top: 0,
              bottom : -10,
              left : -10,
              right: 0
            }
          }
        };
        var cashDeposits = new Chart(cashDepositsCanvas, {
          type: 'line',
          data: data,
          options: options
        });
        document.getElementById('cash-deposits-chart-legend').innerHTML = cashDeposits.generateLegend();
      }
    });
  })(jQuery);
</script>