<?php

$query = mysqli_query($conn,
"SELECT status, COUNT(*) as total
FROM laporan
GROUP BY status");

$status = [];
$total = [];

while($data = mysqli_fetch_array($query)){

    $status[] = $data['status'];
    $total[] = $data['total'];

}

?>

<!-- CHART JS -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- CARD GRAFIK -->

<div class="chart-card">

    <div class="chart-header">

        <h2>
            <i class="fa-solid fa-chart-column"></i>
            Grafik Statistik Laporan
        </h2>

        <p>
            Data laporan berdasarkan status
        </p>

    </div>

    <canvas id="grafik"></canvas>

</div>

<style>

/* =========================
   CARD GRAFIK
========================= */

.chart-card{

    background:white;

    border-radius:30px;

    padding:30px;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.08);

    position:relative;

    overflow:hidden;

}

/* EFEK BACKGROUND */

.chart-card::before{

    content:"";

    position:absolute;

    top:-60px;
    right:-60px;

    width:180px;
    height:180px;

    background:rgba(93,185,255,0.12);

    border-radius:50%;

}

/* HEADER */

.chart-header{

    margin-bottom:25px;

}

.chart-header h2{

    color:#3498db;

    font-weight:bold;

    margin-bottom:8px;

}

.chart-header p{

    color:#777;

    margin:0;

}

/* CANVAS */

#grafik{

    max-height:450px;

}

</style>

<script>

const ctx = document.getElementById('grafik');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: <?php echo json_encode($status); ?>,

        datasets: [{

            label: 'Jumlah Laporan',

            data: <?php echo json_encode($total); ?>,

            backgroundColor: [

                '#5db9ff',
                '#4ecdc4',
                '#ffd166',
                '#ff6b6b',
                '#9b5de5'

            ],

            borderRadius: 15,

            borderSkipped: false,

            hoverBackgroundColor: [

                '#3498db',
                '#2bbbad',
                '#ffb703',
                '#ef476f',
                '#7b2cbf'

            ]

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {

                display: false

            },

            tooltip: {

                backgroundColor: '#3498db',

                titleColor: '#fff',

                bodyColor: '#fff',

                padding: 12,

                cornerRadius: 12

            }

        },

        scales: {

            y: {

                beginAtZero: true,

                grid: {

                    color: 'rgba(0,0,0,0.05)'

                },

                ticks: {

                    color: '#555',

                    font: {

                        weight: 'bold'

                    }

                }

            },

            x: {

                grid: {

                    display: false

                },

                ticks: {

                    color: '#555',

                    font: {

                        weight: 'bold'

                    }

                }

            }

        },

        animation: {

            duration: 2000,

            easing: 'easeOutBounce'

        }

    }

});

</script>