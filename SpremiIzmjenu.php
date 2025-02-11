<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spremi izmjenu</title>
    <link rel="stylesheet" href="styleizbrisi.css">
</head>
<body>

<?php

   $id = $_POST["id"];
   $ime = $_POST["ime"];
   $prezime = $_POST["prezime"];
   $adresa = $_POST["adresa"];
   $mobitel = $_POST["mobitel"];
   $email = $_POST["email"];
   $webstr = $_POST["webstr"];

   $veza = OtvoriVezu();

   $sql = "UPDATE kontakti SET ime='$ime', prezime='$prezime', adresa='$adresa', mobitel='$mobitel',
    email='$email', webstr='$webstr' WHERE ID=$id";

   if($veza->query($sql) === TRUE) {
    echo "<p>Zapis je uspješno spremljen.</p>";
} else {
    echo "Greška: " . $veza->error;
}

$veza->close();
echo "<a id='pregledgumb2' href='PregledKontakta.php'>Pregled Kontakta</a>";
?>
    
</body>
</html>