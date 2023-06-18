<?php
    $naslov = $_POST["title"];
    $kratki_sadrzaj = $_POST["about"];
    $sadrzaj = $_POST["content"];
    $kategorija = $_POST["category"];
    $arhiva = isset($_POST["archive"]) ? 1 : 0;
    $picture = $_FILES['picture']['name'];
    $date = date('Y-m-d');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    
    <section role="main">
        <div class="row">
            <p class="category"><?php echo $kategorija; ?></p>
            <h1 class="title"><?php echo $naslov; ?></h1>
            <p>AUTOR:</p>
            <p>OBJAVLJENO:</p>
        </div>
        <section class="slika">
            <?php echo "<img src='img/$picture'"; ?>
        </section>
        <section class="about">
            <p><?php echo $kratki_sadrzaj; ?></p>
        </section>
        <section class="sadrzaj">
            <p><?php echo $sadrzaj; ?></p>
        </section>
    </section>

</body>

</html>