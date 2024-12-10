<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Online</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
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
        Tabelul de Stoc al Magazinului.
        </div>
    
        <div id="table-container"></div><br><br><br><br>
        <script>
        $(document).ready(function() {
            $.ajax({
                url: '<?= site_url("stoc/afiseazaStoc"); ?>',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var table = '<table>';
                    table += '<tr><th>STOC</th><th>Data Procurării</th><th>Nume</th><th>Vânzări</th></tr>';

                    $.each(data, function(index, row) {
                        table += '<tr>';
                        table += '<td>' + row.STOC + '</td>';
                        table += '<td>' + row.data_procurarii + '</td>';
                        table += '<td>' + row.nume + '</td>';
                        table += '<td>' + row.Vanzari + '</td>';
                        table += '</tr>';
                    });

                    table += '</table>';
                    $('#table-container').html(table);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    $('#table-container').html('<p>Error when fetching data.</p>');
                }
            });
        });
    </script>
        </body>
        </html>
        