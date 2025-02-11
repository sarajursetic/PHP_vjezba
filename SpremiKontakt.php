<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spremi Kontakt</title>
    <link rel="stylesheet" href="stylespremi.css">
</head>
<body>
<div class="container">

    <h1>Podaci</h1>

    <?php 
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $adresa = $_POST["adresa"];
        $mobitel = $_POST["mobitel"];
        $email = $_POST["email"];
        $webstr = $_POST["webstr"];

        echo "<p>Uneseni podaci su: $ime, $prezime, $adresa, $mobitel, $email, $webstr</p>";


        // Spremanje podataka u datoteku:
        /*
        $myfile = fopen("datoteka.txt", "a") or die("Nije moguće otvoriti datoteku!");
        $txt = "$ime\n, $prezime\n, $adresa\n, $mobitel\n, $grad\n, $spol\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        */

        // Spremanje u bazu podataka
        $veza = OtvoriVezu();

        $sql = "INSERT INTO kontakti (Ime, Prezime, Adresa, Mobitel, Email, Webstr) VALUES('$ime', '$prezime', '$adresa', '$mobitel', '$email', '$webstr')";

        if($veza->query($sql) === TRUE) {
            echo "<p id='para1'>Zapis je uspješno spremljen.</p>";
        } else {
            echo "Greška: " . $veza->error;
        }
        
        $veza->close();
echo "<a id='pregledgumb' href='PregledKontakta.php'>Pregled Kontakta</a>";
    ?>

</div>
</body>
</html>