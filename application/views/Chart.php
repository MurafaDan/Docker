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
            Analiza Riscurilor Financiare Linella
        </div>
    
        <div class="chart-container">
            <canvas id="risksChart"></canvas>
        </div>
    
        <div class="footer-text">
           Acest Grafic reprezinta functionalitatea schematica a bazei de date creaze pentru Teza de An la obiectul Baze de Date.
        </div>
        <div class="footer-text">
           Acest Proiect poate fi util in special proprietarilor acestei retele de magazine pentru a analiza si prognoza riscurile  din diferite puncte de vedere!
         </div>
         <br><br><br><br>
        <script>
            $(document).ready(function() {
                var ctx = document.getElementById('risksChart').getContext('2d');
                var risksChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Total Cheltuieli', 'Total Vânzări'],
                        datasets: [{
                            label: 'Sumar pe toate produsele!',
                            data: [], // Datele vor fi încărcate din AJAX
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.3)',
                                'rgba(34, 139, 34, 0.3)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(34, 139, 34, 1)'
                            ],
                            borderWidth: 2
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
                        url: '<?php echo site_url("Chart/obtineDateGrafic"); ?>', 
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            risksChart.data.datasets[0].data = [data.total_cheltuieli, data.total_vanzari];
                            risksChart.update();
                        },
                        error: function(err) {
                            console.error('Eroare la încărcarea datelor: ', err);
                        }
                    });
                }
        
                fetchData(); // Apelăm funcția pentru a încărca datele inițial
            });
            </script>
    </div>

    
</body>
</html>