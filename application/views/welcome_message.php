<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Online</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
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
    <div id="content">
        <div class="pozainmain">
        <img src="<?php echo base_url('assets/images/pozainmain.jpg'); ?>" alt="pozainmain" id="pozainmain">
        </div>

        <div class="info-row">
            <div class="info-card">
                <img src="<?php echo base_url('assets/images/icon1.png'); ?>" alt="Stores Icon">
                <h3>164</h3>
                <p>Magazine în toată țara</p>
            </div>
            <div class="info-card">
                <img src="<?php echo base_url('assets/images/icon2.png'); ?>" alt="Products Icon">
                <h3>14 500+</h3>
                <p>Produse în magazine</p>
            </div>
            <div class="info-card">
                <img src="<?php echo base_url('assets/images/icon3.png'); ?>" alt="Activity Icon">
                <h3>22</h3>
                <p>Ani de activitate</p>
            </div>
        </div>

        <div class="footer-text">
            Linella este o rețea sută la sută națională cu cea mai mare extindere geografică la nivel național.<br>
            Înregistrează peste 150 de magazine, are o echipă de peste 4500 de angajați și de 21 de ani<br>
            promovează comerțul modern în Republica Moldova. <br><br>

            Misiunea companiei este de a se afirma ca vecinul de încredere al consumatorilor  prin oferirea de<br>
            produse de necesitate zilnică, prin crearea unei experiențe plăcute de cumpărare și prin oferirea<br>
            celui mai bun raport calitate-preț.<br><br>

            Pe parcursul activității sale Linella a pus accent pe investiții atât în plan economic, cât și social. S-a<br>
            angajat în susținerea producătorilor autohtoni, a făcut investiții în programe comunitare din<br>
            domeniul educației, sănătate și sport, cultură și mediu. <br><br>
        </div>

        <div class="header-text">
         Linella Store Locations
        </div>
        <br><br>
        <div id="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d78304.06046901371!2d28.793463991050533!3d47.01481967078725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sLinella%20moldova!5e1!3m2!1sru!2s!4v1705802165961!5m2!1sru!2s" width="900" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
        <br><br><br><br><br><br>

    </div>

    
</body>
</html>