<?php




$host = "127.0.0.1";
$user = "root";
$password = ""; //insert your password
$database ="contatti";
$port = ; //insert port
$conDB = new mysqli($host,$user,$password,$database,$port);

if($conDB === false){
    die("Errore di connessione: ".$conDB->connect_error);
}

?>
