<?php

//$connessione = mysqli_connect('localhost', 'root', '', 'contatti');
/*
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'contatti';

$contatti = new mysqli($host, $user, $password, $database);
*/

// if ($connessione->connect_errno) {
//   echo " Connessione a MySQL fallita: " . $connessione->connect_error;
//   exit();
// }


$host = "127.0.0.1";
$user = "root";
$password = "Maradona10@";
$database ="contatti";
$port = 3306;
$conDB = new mysqli($host,$user,$password,$database,$port);

if($conDB === false){
    die("Errore di connessione: ".$conDB->connect_error);
}

?>
