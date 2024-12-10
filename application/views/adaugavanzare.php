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
        Magazin Online
        </div>
    
        <div class="container">
            <form id="insertForm">
                <label for="data">Data:</label>
                <input type="text" id="data" name="data" placeholder="YYYY-MM-DD" required>
                
                <label for="cantitate">Cantitate:</label>
                <input type="text" id="cantitate" name="cantitate" placeholder="Cantitate" required>
    
                <label for="produs">Produs:</label>
                <select id="produs" name="produs" required>
    
                    <option value="Paine alba">Paine alba</option>
                    <option value="Paine integrala">Paine integrala</option>
                    <option value="Bagheta">Bagheta</option>
                    <option value="Croissant">Croissant</option>
                    <option value="Focaccia">Focaccia</option>
                    <option value="Paine cu masline">Paine cu masline</option>
                    <option value="Chifle">Chifle</option>
                    <option value="Paine de secara">Paine de secara</option>
                    <option value="Paine cu cereale">Paine cu cereale</option>
                    <option value="Paine fara gluten">Paine fara gluten</option>
                    <option value="Lapte integral">Lapte integral</option>
                    <option value="Lapte degresat">Lapte degresat</option>
                    <option value="Iaurt natural">Iaurt natural</option>
                    <option value="Brânza Cheddar">Brânza Cheddar</option>
                    <option value="Brânza Mozzarella">Brânza Mozzarella</option>
                    <option value="Iaurt cu fructe">Iaurt cu fructe</option>
                    <option value="Oua">Oua</option>
                    <option value="Unt">Unt</option>
                    <option value="Lapte batut">Lapte batut</option>
                    <option value="Cascaval">Cascaval</option>
                    <option value="Smântâna">Smântâna</option>
                    <option value="Lapte de soia">Lapte de soia</option>
                    <option value="Lapte de migdale">Lapte de migdale</option>
                    <option value="Piept de pui">Piept de pui</option>
                    <option value="Cotlet de porc">Cotlet de porc</option>
                    <option value="Carne tocata de vita">Carne tocata de vita</option>
                    <option value="Salam">Salam</option>
                    <option value="Bacon">Bacon</option>
                    <option value="Sunca">Sunca</option>
                    <option value="Cârna?i">Cârna?i</option>
                    <option value="Pulpe de pui">Pulpe de pui</option>
                    <option value="Aripioare de pui">Aripioare de pui</option>
                    <option value="Miel">Miel</option>
                    <option value="Somon">Somon</option>
                    <option value="Cod">Cod</option>
                    <option value="Ton">Ton</option>
                    <option value="Creve?i">Creve?i</option>
                    <option value="Scoici">Scoici</option>
                    <option value="Crab">Crab</option>
                    <option value="Caracati?a">Caracati?a</option>
                    <option value="Sardine">Sardine</option>
                    <option value="Macrou">Macrou</option>
                    <option value="Pastrav">Pastrav</option>
                    <option value="Mere">Mere</option>
                    <option value="Banane">Banane</option>
                    <option value="Portocale">Portocale</option>
                    <option value="Struguri">Struguri</option>
                    <option value="Ro?ii">Ro?ii</option>
                    <option value="Castrave?i">Castrave?i</option>
                    <option value="Ardei gras">Ardei gras</option>
                    <option value="Ceapa">Ceapa</option>
                    <option value="Usturoi">Usturoi</option>
                    <option value="Cartofi">Cartofi</option>
                    <option value="Apa minerala">Apa minerala</option>
                    <option value="Suc de portocale">Suc de portocale</option>
                    <option value="Suc de mere">Suc de mere</option>
                    <option value="Cola">Cola</option>
                    <option value="Limonada">Limonada</option>
                    <option value="Bere">Bere</option>
                    <option value="Vin alb">Vin alb</option>
                    <option value="Vin ro?u">Vin ro?u</option>
                    <option value="Whisky">Whisky</option>
                    <option value="Vodca">Vodca</option>
                    <option value="Pizza congelata">Pizza congelata</option>
                    <option value="Legume mixte congelate">Legume mixte congelate</option>
                    <option value="Fructe de padure congelate">Fructe de padure congelate</option>
                    <option value="Cartofi praji?i congelati">Cartofi praji?i congelati</option>
                    <option value="Chiftelu?e congelate">Chiftelu?e congelate</option>
                    <option value="File de pe?te congelat">File de pe?te congelat</option>
                    <option value="Creve?i congelati">Creve?i congelati</option>
                    <option value="Pateuri congelate">Pateuri congelate</option>
                    <option value="Fructe tropicale congelate">Fructe tropicale congelate</option>
                    <option value="Gogo?i congelate">Gogo?i congelate</option>
                    <option value="Orez alb">Orez alb</option>
                    <option value="Pasta fainoase">Pasta fainoase</option>
                    <option value="Ulei de masline">Ulei de masline</option>
                    <option value="Otet balsamic">Otet balsamic</option>
                    <option value="Zahar alb">Zahar alb</option>
                    <option value="Faina de grau">Faina de grau</option>
                    <option value="Malai">Malai</option>
                    <option value="Cereale pentru mic dejun">Cereale pentru mic dejun</option>
                    <option value="Cafea macinata">Cafea macinata</option>
                    <option value="Ceai negru">Ceai negru</option>
                    <option value="Chipsuri de cartofi">Chipsuri de cartofi</option>
                    <option value="Ciocolata">Ciocolata</option>
                    <option value="Bomboane / kg">Bomboane / kg</option>
                    <option value="Biscuiti/kg">Biscuiti/kg</option>
                    <option value="Napolitane">Napolitane</option>
                    <option value="Guma de mestecat">Guma de mestecat</option>
                    <option value="Batoane de cereale">Batoane de cereale</option>
                    <option value="Fructe uscate / kg">Fructe uscate / kg</option>
                    <option value="Nuci">Nuci</option>
                    <option value="Jeleuri / buc">Jeleuri / buc</option>
                    <option value="Detergent lichid">Detergent lichid</option>
                    <option value="Sapun lichid">Sapun lichid</option>
                    <option value="Sampon">Sampon</option>
                    <option value="Gel de dus">Gel de dus</option>
                    <option value="Pasta de dinti">Pasta de dinti</option>
                    <option value="Dezinfectant">Dezinfectant</option>
                    <option value="Hartie igienica">Hartie igienica</option>
                    <option value="Servetele umede">Servetele umede</option>
                    <option value="Balsam de rufe">Balsam de rufe</option>
                    <option value="Solutie de curatat geamuri">Solutie de curatat geamuri</option>
                    <option value="Bauturi  proteice">Bauturi  proteice</option>
                    <option value="Granola">Granola</option>
                    <option value="Seminte de chia /kg">Seminte de chia /kg</option>
                    <option value="Fructe uscate impachetate">Fructe uscate impachetate</option>
                    <option value="Lapte vegetal">Lapte vegetal</option>
                    <option value="Sucuri naturale">Sucuri naturale</option>
                    <option value="Cereale integrale">Cereale integrale</option>
                    <option value="Smoothie">Smoothie</option>
                    <option value="Iaurt grecesc">Iaurt grecesc</option>
                    <option value="Hrana uscata pentru caini">Hrana uscata pentru caini</option>
                    <option value="Hrana umeda pentru pisici">Hrana umeda pentru pisici</option>
                    <option value="Snacks pentru animale">Snacks pentru animale</option>
                    <option value="Litiera pentru pisici">Litiera pentru pisici</option>
                    <option value="Jucarii pentru animale">Jucarii pentru animale</option>
                    <option value="Perii de ingrijire pentru animale">Perii de ingrijire pentru animale</option>
                    <option value="Culcus pentru caini">Culcus pentru caini</option>
                    <option value="Zgarda pentru caini">Zgarda pentru caini</option>
                    <option value="Acvariu pentru pesti">Acvariu pentru pesti</option>
                    <option value="Hrana pentru pesti">Hrana pentru pesti</option>
                    <option value="Detergent de rufe">Detergent de rufe</option>
                    <option value="Lavete multi-uz">Lavete multi-uz</option>
                    <option value="Dezinfectant suprafete">Dezinfectant suprafete</option>
                    <option value="Saci menajeri">Saci menajeri</option>
                    <option value="Mop ?i galeata">Mop ?i galeata</option>
                    <option value="Burete de vase">Burete de vase</option>
                    <option value="Solutie curatat WC">Solutie curatat WC</option>
                    <option value="Odorizant camera">Odorizant camera</option>
                    <option value="Folie alimentara">Folie alimentara</option>
                    <option value="Pungi de congelator">Pungi de congelator</option>
                    <option value="Ulei pentru mobila">Ulei pentru mobila</option>
                    <option value="Solutie curatat pardoseli">Solutie curatat pardoseli</option>
                    <option value="Solutie anti-calcar">Solutie anti-calcar</option>
                    <option value="Tablete ma?ina de spalat vase">Tablete ma?ina de spalat vase</option>
                    <option value="Detergent universal">Detergent universal</option>
                    <option value="Perie de toaleta">Perie de toaleta</option>
                    <option value="Solutie curatat geamuri">Solutie curatat geamuri</option>
                    <option value="Sapun solid">Sapun solid</option>
                </select>
    
                <button type="submit">Insert Data</button>
            </form>
            <div id="message"></div>
        </div><br><br><br><br><br><br>


        <div class="delete-form-container">
            <form id="deleteByDateForm">
                <label for="deleteDate">Anulare Vanzare</label>
                <input type="date" id="deleteDate" name="date" required>
        
                <button type="submit">Delete by Date</button>
            </form>
            <div id="deleteMessage"></div>
        </div>
    
        <script>
        document.getElementById("insertForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            // Get form values
            var data = document.getElementById("data").value;
            var cantitate = document.getElementById("cantitate").value;
            var produs = document.getElementById("produs").value;
            
            var xhr = new XMLHttpRequest();
            
            xhr.open("POST", "<?php echo site_url('adaugavanzare/insertVanzare'); ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("message").innerHTML = xhr.responseText;
                }
            };
            
            xhr.send("data=" + data + "&cantitate=" + cantitate + "&produs=" + produs);
        });

        document.getElementById("deleteByDateForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            var dateToDelete = document.getElementById("deleteDate").value;
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo site_url('adaugavanzare/deleteByDate'); ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("deleteMessage").innerHTML = xhr.responseText;
                }
            };
            
            xhr.send("date=" + dateToDelete);
        });
    </script>
    </body>
    </html>
        