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
    <title>Le Nouvel Observateur</title>
</head>

<body>
    <header>
        <h1>L'OBS</h1>
        <?php include("nav.php") ?>
    </header>
    <hr>
    <main>
        <section>
            <h2>POLITIKA</h2>
            <div class="row">
                <?php
                include 'connect.php';
                define('UPLPATH', 'img/');
                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Politika' LIMIT 3";
                $result = mysqli_query($dbc, $query);
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    echo '<a href="">';
                    echo '<article class="clanak">';
                    echo '<img src="' . UPLPATH . $row['slika'] . '">';
                    echo '<div class="nositelj-h3">';
                    echo '<h3 class="naslov-clanka">';
                    echo $row['naslov'];
                    echo '</h3>';
                    echo '<p class="tekst-ispod-clanka">' . $row['datum'] . '</p>';
                    echo '</div></article>';
                    echo '</a>';
                } ?>

            </div>
        </section>
        <section>
            <h2>SPORT</h2>
            <div class="row">
            <?php
                include 'connect.php';
                $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='Sport' LIMIT 3";
                $result = mysqli_query($dbc, $query);
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                    echo '<a href="">';
                    echo '<article class="clanak">';
                    echo '<img src="' . UPLPATH . $row['slika'] . '">';
                    echo '<div class="nositelj-h3">';
                    echo '<h3 class="naslov-clanka">';
                    echo $row['naslov'];
                    echo '</h3>';
                    echo '<p class="tekst-ispod-clanka">' . $row['datum'] . '</p>';
                    echo '</div> </article>';
                    echo '</a>';
                } ?>

            </div>

        </section>
    </main>
    <footer>
        <p>© L'Obs - Les marques ou contenus du site nouvelobs.com sont soumis a la protection de la propriete intellectuelle</p>
    </footer>
</body>

</html>