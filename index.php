<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikacija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

    <h1 id="naslov">Unos kontakta:</h1>

    <form action="SpremiKontakt.php" method="POST">

        ime: <input type="text" name="ime">
        <br><br>
        prezime: <input type="text" name="prezime">
        <br><br>
        adresa: <input type="text" name="adresa">
        <br><br>
        mobitel: <input type="text" name="mobitel">
        <br><br>
        email: <input type="text" name="email">
        <br><br>
        webstr: <input type="text" name="webstr">
        <br><br>

        <!--

        -->

        <button id="Posalji" type="submit">Spremi</button>

    </form>

</div>
</body>
</html>

