<?php

include_once('../assets/includes/api.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Woerden</title>
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/meer_info.css">
</head>

<body>
    <div id="container">
        <header>
            <div class="container">
                <a href="../index.php">
                    <img src="../assets/img/logo.png" alt="logo" width="300" height="75" id="logo">
                </a>
                <ul>
                    <li><a href="overzicht.php">FILM AGENDA</a></li>
                    <li><a href="#">ALLE VESTIGINGEN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </header>
        <nav>
            <div class="koop">
                <p>KOOP JE TICKETS</p>
                <select name="Kies je film" id="filmsdropdown">
                    <option value="placeholder">Kies je film</option>
                    <?php

                    for ($i = 0; $i < $annexLength; $i++) {
                        echo '<option value="' . $i . '">' . $filmdata[$i]['film_title'] . '</option>';
                    }

                    ?>
                </select>
                <button type="button">BESTEL TICKETS</button>
            </div>
        </nav>
        <main>

            <?php

            if (isset($_GET['movie'])) {
                $get_movie = intval($_GET['movie']);
                $movie_id = 0;

                if (!isset($get_movie)) {
                    return;
                } else {
                    while ($movie_id != $get_movie) {
                        $movie_id++;
                    }
                }
            } else {
                echo "Kon de informatie niet ophalen, helaas :(";
            }

            ?>

            <div id="infoContainer">
                <div id="backButton">
                    <a href="overzicht.php">
                        < Terug naar overzicht</a>
                </div>
                <?php

                // Image inladen van vorige selectie
                echo '<img src="' . $filmdata[$get_movie]['film_photo'] . '" width="300px">';

                ?>
                <div id="textContainer">
                    <?php
                    // Titel van de film inladen
                    echo "<h2>" . $filmdata[$get_movie]['film_title'] . "</h2>";

                    // Lange beschrijving inladen van vorige selectie
                    echo '<p>' . $filmdata[$get_movie]['film_longinfo'] . '</p>';

                    ?>
                </div>
                <div id="bookButton">
                    <a href="boeking.php">Boek nu! ></a>
                </div>
            </div>
        </main>
        <footer>
            <div id="links">
                <img src="../assets/img/footerlogo.png" alt="logo" id="footerlogo">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Vero laboriosam eaque debitis aliquid similique voluptatum modi aliquam dignissimos commodi!
                    Dolorum velit nulla laboriosam facere in eaque soluta hic incidunt ipsam.
                </p>
                <button type="button">LEES MEER</button>
            </div>
            <div id="midden">
                <p>NAVIGEER</p>
                <a href="#" id="werkenbij">Werken bij</a>
                <a href="#">Veelgestelde vragen</a>
                <a href="#">Vestegingen</a>
                <a href="#">Contact</a>
            </div>
            <div id="rechts">
                <p>VOLG ONS</p>
                <div id="logos">
                    <img src="../assets/img/facebook.png" alt="Facebook">
                    <img src="../assets/img/twitter.png" alt="Facebook">
                    <img src="../assets/img/instagram.png" alt="Facebook">
                </div>
            </div>
            <img src="../assets/img/footer.png" alt="footer foto" id="footerlogo">
        </footer>
        <div id="disclaimer">
            <div id="disclaimertekst">
                <a href="#">Voorwaarden | Privacy beleid | Cookie disclaimer</a>
            </div>
        </div>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>