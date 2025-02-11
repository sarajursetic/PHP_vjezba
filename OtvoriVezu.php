<?php

function OtvoriVezu() {

    // podaci za spajanje
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adresar";

    // kreiraj vezu
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    // provjeri vezu
    if($conn->connect_error) {
        die("Greška: " . $conn->connect_error);
    }
    echo "<!-- Uspješno spojen na bazu -->";

    return $conn;

}

?>