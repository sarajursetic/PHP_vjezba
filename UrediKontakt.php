<?php

include("OtvoriVezu.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi Kontakt</title>
    <link rel="stylesheet" href="styleuredi.css">
</head>
<body>

<?php

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti WHERE id=" . $_GET["id"];

//echo $sql;

$result = $veza->query($sql);
if($result->num_rows > 0){

    $row = $result->fetch_assoc();

                $id = $row["ID"];
                $ime = $row["ime"];
                $prezime = $row["prezime"];
                $adresa = $row["adresa"];
                $mobitel = $row["mobitel"];
                $email = $row["email"];
                $webstr = $row["webstr"];
    
}else{
    echo"Nema podataka u bazi.";
}


?>

<h1 id="naslov">Uredi podatke za <?php echo $ime ." ". $prezime;?></h1>

<form action="SpremiIzmjenu.php" method="POST" >

        ime: <input type="text" name="ime" value="<?php echo $ime; ?>">
        <br><br>
        prezime: <input type="text" name="prezime" value="<?php echo $prezime; ?>">
        <br><br>
        adresa: <input type="text" name="adresa" value="<?php echo $adresa; ?>">
        <br><br>
        mobitel: <input type="text" name="mobitel" value="<?php echo $mobitel; ?>">
        <br><br>
        email: <input type="text" name="email" value="<?php echo $email; ?>">
        <br><br>
        webstr: <input type="text" name="webstr" value="<?php echo $webstr; ?>">
        <br><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <button type="submit" id="Posalji">Spremi Izmjene</button>

</form>



</body>
</html>