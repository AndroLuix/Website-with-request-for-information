<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Webicon</title>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coustard" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="./MaterialeSito/img/favicon.svg">


    <style>
        body {
            font-size: 26px
        }
      
    </style>

</head>

<body>


    <nav id=#div1>
        <div id="div1">
            <img src="./MaterialeSito/img/logo-webicon.svg" alt="">
            <a href="#scrollspyHeading1" id="about">about</a>
            <a href="#scrollspyHeading2" id="servizi">servizi</a>
            <a href="#scrollspyHeading3" id="contatti">contatti</a>
            <a href="#scrollspyHeading2" id="invoice">invoice</a>
            
        </div>
        <div id="div2">
                <p>
                    i tuoi progetti <br>
                    in mani sicure
                </p>
            </div>





    </nav>


    <div class="display">
        <div class="card">
            <img src="./MaterialeSito/img/produttivita.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Produttivita</p>
            </div>

        </div>

        <div class="card">
            <img src="./MaterialeSito/img/creativita.svg" class="card-img-top" alt="...">


            <div class="card-body">
                <p class="card-text">Creativita</p>
            </div>

        </div>

        <div class="card">
            <img src="./MaterialeSito/img/efficienza.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Efficienza</p>
            </div>
        </div>
    </div>




    <div id="scrollspyHeading1">
        <h2>Chi siamo</h2>
        <p>
            Webcoin è un'azienda informatica che nasce per svolgere attività di consulenza informatica.
            Forniamo un servizio a 360° nel mondo del web, dello viluppo, della grafica pubblicitaria, web design e
            project management
        </p>
    </div>




    <!--secondo div dopo la scritta-->

    <div class="container-fluid" id="servizi1">
        <h4 id="scrollspyHeading2">Servizi</h4>
        <div class="card">
            <img src="./MaterialeSito/img/consulenza.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Consulenza</p>
                <p class="testo">analisi <br> Progettazione soluzioni <br> Assitenza personale</p>
            </div>
        </div>

        <div class="card">
            <img src="./MaterialeSito/img/sviluppo.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Sviluppo</p>
                <p class="testo">Database <br> Applicativi web ad hoc <br> E-Commerce</p>
            </div>
        </div>


        <div class="card">
            <img src="./MaterialeSito/img/web design.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Web Design</p>
                <p class="testo">Web responsive e CMS <br> Restyling <br> Landing page</p>
            </div>
        </div>
    </div>



    <div class="container-fluid" id="servizi2">

        <div class="card">
            <img src="./MaterialeSito/img/digital marketing.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Digital Marketing</p>
                <p class="testo">UX/IU Design <br> Analisi SEO e blog <br> Advertising e banner</p>
            </div>
        </div>

        <div class="card">
            <img src="./MaterialeSito/img/grafica.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Grafica</p>
                <p class="testo">Logo & brand identity <br> Restyling brand identity<br> Arte e illustrazione</p>
            </div>
        </div>

        <div class="card">
            <img src="./MaterialeSito/img/efficienza.svg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Stampe</p>
                <p class="testo">Cataloghi - Libri <br> Manifesti - Locandine<br> Dépliant e tanto altro!</p>
            </div>
        </div>
    </div>







    <footer>

        <div style="color:white">
            <h4 id="scrollspyHeading3">Contatti</h4>
        </div>
        <div class="img-footer">
            <div class="centra">
                <div class="card">
                    <img src="./MaterialeSito/img/luogo.svg" class="card-img-top" alt="..." style="height: 110px;">
                    <div class="card-body">
                        <p class="card-text">Reggio Nell'Emilia (IT)</p>

                    </div>
                </div>
            </div>


            <div class="card">
                <img src="./MaterialeSito/img/mail.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text" style="color:white">info@webcoin.it</p>

                </div>
            </div>

            <div class="container-lg"> <br><br>Per qualsiasi informazione, richieste di preventivo o consulenza
                potete contattarci per email a info@webcoin.it, vi risponderemo entro 24 ore. <br>Il nostro impegno ogni
                giorno è quello di offrirvi soluzioni per qualsiasi esigenza e prezzo
                <!--FORM-->
                
                <?php
                if (isset($_POST['bottone_invio'])) {

                    require_once("connessione.php");

                    $email = $_POST['email'];
                    $testo = $_POST['testo'];

                    $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

                    if (!preg_match($pattern, $email)) {

                        echo "
                            <script> alert
                            ('indirizzo email errato, riprova!')
                            </script>";
                        exit;
                    } else {

                        $sql = "INSERT INTO contatto (email, testo) VALUES ('$email','$testo')";

                        //inserimento dei dati nella tabella CONTATTO
                        $result = $conDB->query($sql);

                        echo "<br><br>Testo inviato correttamente";
                    }
                } else {
                    //caso di condizione falsa

                ?>
                    <form method="post">
                        <div class="mb-3">

                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci la tua e-mail">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">contattaci</label>
                            <textarea class="form-control" name="testo" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <label for="checkbox">Accetta <a href="gdpr.html">Termini e Condizioni</a></label>
        
                            <input type="checkbox" required value="true">
                        </div>
                        <button type="submit" name="bottone_invio" class="btn btn-primary">Invia</button>
                    </form>
            </div>
        </div>

    </footer>


<?php }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

</body>

</html>