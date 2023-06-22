<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rufina:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantata+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <title>Le Nouvel Observateur</title>
</head>

<body>
    <header>
        <h1>L'OBS</h1>
        <?php include("nav.php") ?>
    </header>
    <hr>

    <main>

        <?php
        include("connect.php");
        define('UPLPATH', 'img/');
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];
        }

        $query = "SELECT * FROM vijesti WHERE id = $id";
        $result = mysqli_query($dbc, $query);
        $row = mysqli_fetch_array($result);
        echo '<p class="putanja"' . ">L'Obs > " . $row['kategorija'] . "</p>";
        echo '<h2 class="naslov-clanka">' . $row['naslov'] . '</h2>';
        echo '<img src="img/' . $row['slika'] . '" class="img-clanak">';
        echo '<p class="kratki-opis">' . $row['sazetak'] . '</p>';
        echo '<div class="vrijeme-objave">
            <p class="vr-obj">Objavljeno ' . $row['datum'] . '</p> </div>';
        echo '<div class="tekst-clanka">
            <p>' . $row['tekst'] . '</p>
        </div>'
        ?>

    </main>
    <footer>
        <p>© L'Obs - Les marques ou contenus du site nouvelobs.com sont soumis a la protection de la propriete intellectuelle</p>
    </footer>
</body>

</html>