<?php
    
    echo '
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="kategorija.php?kategorija=Politika">POLITIKA</a></li>
            <li><a href="kategorija.php?kategorija=Sport">SPORT</a></li>
            <li><a href="administracija.php">ADMINISTRACIJA</a></li>
            <li><a href="unos.php">DODAVANJE ČLANKA</a></li>
            '; if (isset($_SESSION['username']) && isset($_SESSION['razina'])) echo '<li><a href="odjava.php">ODJAVA</a></li>';
            else echo '<li><a href="registracija.php">PRIJAVA</a></li>
        </ul>
    </nav>';

?>