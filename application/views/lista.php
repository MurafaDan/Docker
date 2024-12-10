<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Online</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
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
        Lista de stoc al magazinului
        </div>
    
        <div id="data-table-container"> </div><br><br><br><br><br>
        
        <script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= site_url("Lista/obtineDateLista"); ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var table = '<table>';
                table += '<tr><th>Nume Produs</th><th>Pret de Vanzare</th><th>Termen de Valabilitate</th><th>Tip Grup</th></tr>';

                $.each(data, function(index, row) {
                    table += '<tr>';
                    table += '<td>' + row['Nume Produs'] + '</td>';
                    table += '<td>' + row['Pret de Vanzare'] + '</td>';
                    table += '<td>' + row['Termen de Valabilitate'] + '</td>';
                    table += '<td>' + row['Tip Grup'] + '</td>';
                    table += '</tr>';
                });

                table += '</table>';
                $('#data-table-container').html(table);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Error: ' + textStatus + ', ' + errorThrown);
                $('#data-table-container').html('<p>Error fetching data.</p>');
            }
        });
    });
</script>
            
            </body>
            </html>
        