<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisanje kontakta</title>
<link rel="stylesheet" href="styleizbrisi.css">
</head>
<body>
    
<h1>Brisanje kontakta</h1>

<?php

    $id = $_GET["id"];

    $veza = OtvoriVezu();

    $sql = "DELETE FROM kontakti WHERE ID = $id";

    if ($veza->query($sql) === TRUE){
        echo"<p id='para'>Kontakt je uspješno izbrisan iz baze.</p>";
        echo "<a id='pregledgumb2' href='PregledKontakta.php'>Pregled Kontakta</a>";
    }else{
        echo"<p>Greška: $veza->error</p>";
    }

    $veza->close();

?>

</body>
</html>