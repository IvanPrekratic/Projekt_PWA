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
        if(isset($_GET['kategorija'])) { 
            $kategorija = $_GET['kategorija'];
        }

        $query = "SELECT * FROM vijesti WHERE kategorija = '$kategorija'";
        $result = mysqli_query($dbc, $query);
                $i = 0;
                echo '<h3 class="naslov-kat">' . $kategorija . '</h3>';
                while ($row = mysqli_fetch_array($result)) {
                    echo '<a href="clanak.php?id='.$row['id'].'" class="link-kat">';
                    echo '<article class="clanak-kat">';
                    echo '<img src="' . UPLPATH . $row['slika'] . '" class="slika-kat">';
                    echo '<div class="nositelj-h3">';
                    echo '<h3 class="naslov-clanka">';
                    echo $row['naslov'];
                    echo '</h3>';
                    echo '<p class="kratki-opis-kat">' . $row['sazetak'] . '</p>';
                    echo '<p class="tekst-ispod-clanka">' . $row['datum'] . '</p>';
                    echo '</div></article>';
                    echo '</a>';
                }
        ?>

    </main>
    <footer>
        <p>© L'Obs - Les marques ou contenus du site nouvelobs.com sont soumis a la protection de la propriete intellectuelle</p>
    </footer>
</body>

</html>