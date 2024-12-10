<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Online</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <ul class="navbar">
        <li>
                <a href="<?= site_url('welcome') ?>">
                <div class="logo">  
                <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Supermarket Logo" id="navbar-logo">
            </div>
            </a>
        </li>
        <li><a id="salesLink" class="nav-link" href="<?php echo base_url('index.php/Chart'); ?>">Grafic relational</a></li>
        <li><a id="otherLink" class="nav-link" href="<?php echo base_url('index.php/Chart2'); ?>">Grafic Lunar</a></li>
        
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">DATE</a>
            <div class="dropdown-content">
            <a href="<?php echo base_url('index.php/Stoc'); ?>">Stoc Magazin</a>
            <a href="<?php echo base_url('index.php/Vanzari'); ?>">Stoc Magazin</a>
            <a href="<?php echo base_url('index.php/Lista'); ?>">Lista Produse</a>
            <a href="<?php echo base_url('index.php/IstoricVanzari'); ?>">Istoric Vanzari</a>

            </div>
        </li>

        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">CUMPARATURI</a>
            <div class="dropdown-content">
            <a href="<?php echo base_url('index.php/AdaugaVanzare'); ?>">Magazin Online</a>

            </div>
        </li>

    </ul>


        <div class="header-text">
            Grafic liniar al vanzarilor pe zile.
        </div>
    
        <div class="chart-container">
            <canvas id="salesLineChart"></canvas>
        </div>

        <div class="footer-text">
            Graficul este dinamic si se modifica odata cu adaugarea unui produs in tabelul de vanzari.
        </div>
        
        <script>
        $(document).ready(function() {
            var ctx = document.getElementById('salesLineChart').getContext('2d');
            var salesLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [], // X-axis labels
                    datasets: [{
                        label: 'Total Sales',
                        data: [], // Y-axis data
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
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
        
            function fetchData() {
                $.ajax({
                    url: '<?php echo site_url("Chart2/obtineDateGrafic"); ?>',
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        salesLineChart.data.labels = data.map(item => item.data);
                        salesLineChart.data.datasets[0].data = data.map(item => item.total_pret);
                        salesLineChart.update();
                    },
                    error: function(err) {
                        console.error('Error loading data', err);
                    }
                });
            }
        
            fetchData();
        });
        </script>
        
        </body>
        </html>
        