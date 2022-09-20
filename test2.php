<?php

include_once('./assets/includes/api.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnnexBios Woerden</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <div id="container">

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
        <div id="foto">
            <div class="welkom-container" id="welkom1">
                <h2>
                    WELKOM BIJ ANNEXBIOS WOERDEN
                </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta commodi modi, et iure rerum molestias itaque temporibus, provident consectetur culpa expedita fugiat pariatur mollitia distinctio consequatur dolorem eaque sunt molestiae?</p>
                <button>BEKIJK DE DRAAIENDE FILMS</button>
            </div>
            <div class="welkom-container" id="locatie">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2465.3907025487842!2d4.129705438391833!3d51.83555999215684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c451c6f4434d53%3A0x20bb4b6bcdd57904!2sRijksstraatweg%2042%2C%203223%20KA%20Hellevoetsluis!5e0!3m2!1snl!2snl!4v1662636316050!5m2!1snl!2snl" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <img src="assets/img/bioscoop.png" alt="">
            </div>
        </div>
        <div id="filmagenda">
            <p id="tekstFilmagenda">FILM AGENDA</p>
            <div id="filter">
                <select name="FILMS" class="films">
                    <option value="placeholder">FILMS</option>
                    <option value="placeholder">Placeholder</option>
                    <option value="placeholder">Placeholder</option>
                    <option value="placeholder">Placeholder</option>
                </select>
                <p>DEZE WEEK</p>
                <p>VANDAAG</p>
                <select name="FILMS" class="categorie">
                    <option value="placeholder">CATEGORIE</option>
                    <option value="placeholder">Placeholder</option>
                    <option value="placeholder">Placeholder</option>
                    <option value="placeholder">Placeholder</option>
                </select>
            </div>
        </div>
        <div id="movie_display">
            <?php

            for ($eee = 0; $eee < $annexLength; $eee++) {

                echo '<div class="card">
                <img src="' . $filmdata[$eee]["film_photo"] . '" alt="image" width="100px" height="170px">
                <h2>' . $filmdata[$eee]["film_title"] . '</h2>
                <p>Release date: '  . $filmdata[$eee]["film_releasedate"] . ' <br>
                Rating: ' . str_replace('.', ',', intval($filmdata[$eee]["film_rating"]) / 10) . ' / 10 <br>
                Genre: ' . implode(", ", $filmdata[$eee]["genres"]) . '
                <br> <br>' . $filmdata[$eee]["film_shortinfo"] . '
                </p> 
                <a href="pages/meer_info.php?movie=' . array_search($filmdata[$eee]['film_id'], array_column($filmdata, 'film_id')) . '">Meer info</a>
                </div>';
            }

            ?>
        </div>
        <footer>
            <div id="links">
                <img src="assets/img/footerlogo.png" alt="logo" id="footerlogo">
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
                    <img src="assets/img/facebook.png" alt="Facebook">
                    <img src="assets/img/twitter.png" alt="Facebook">
                    <img src="assets/img/instagram.png" alt="Facebook">
                </div>
            </div>
            <img src="assets/img/footer.png" alt="footer foto" id="footerlogo">
        </footer>
        <div id="disclaimer">
            <div id="disclaimertekst">
                <a href="#">Voorwaarden | Privacy beleid | Cookie disclaimer</a>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>

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

        echo '<img src="' . $filmdata[$get_movie]['film_photo'] . '">';
    }
}

?>