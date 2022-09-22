<?php
require_once "assets/includes/db.php";
include "assets/includes/api.php";
include "assets/includes/head.php";
include "assets/includes/header.php";

?>
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
    <div id="main-body">
        <div id="main-info">
            <div class="film-title">
                <?php echo "<h1>" . $filmdata[$get_movie]['film_title'] . "</h1>"; ?>
            </div>
            <div class="container-film">
                <?php echo '<img alt="film poster" src="' . $filmdata[$get_movie]['film_photo'] . '">' ?>
                <div class="container-film-info">
                    <div class="film-info">
                        <div class="film-review">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img src="assets/img/Star colored.png" alt="colored star">
                            <img class="uncolored-star" src="assets/img/Star uncolored.png" alt="uncolored star">
                        </div>
                        <div class="film-restrictions">

                            <?php

                            ?>
                            <img src="assets/img/kijkwijzer-12.png" alt="kijkwijzer 12">
                            <img src="assets/img/kijkwijzer-eng.png" alt="kijkwijzer eng">
                            <img src="assets/img/kijkwijzer-geweld.png" alt="kijkwijzer geweld">
                        </div>
                        <div class="film-release">
                            <h3>Release: </h3>
                            <?php echo '<h3>' . $filmdata[$get_movie]['film_releasedate'] . '</h3>' ?>

                        </div>

                        <?php echo "<p class='film-description'>" . $filmdata[$get_movie]['film_shortinfo'] . "</p>"; ?>
                        <div class="container-additional-info">
                            <ul class="additional-info">
                                <li>
                                    <strong class="additional-info-header">Genre: </strong>
                                    <?php
                                    $space = ', ';
                                    foreach ($filmdata[$get_movie]['genres'] as $genre) {
                                        echo '<p>' . $genre . $space . '</p>';
                                    } ?>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Filmlengte: </strong>
                                    <?php echo '<p>' . $filmdata[$get_movie]['film_length'] . '</p>' ?>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Land: </strong>
                                    <?php echo '<p>' . $filmdata[$get_movie]['film_country'] . '</p>' ?>
                                </li>
                                <li>
                                    <strong class="additional-info-header">IMDB Score: </strong>
                                    <p>8.3/10</p>
                                </li>
                                <li>
                                    <strong class="additional-info-header">Regisseur: </strong>
                                    <?php echo '<p>' . $filmdata[$get_movie]['film_director'] . '</p>' ?>
                                </li>
                                <li class="additional-info-header-actor">
                                    <strong>Acteurs:</strong>
                                    <?php
                                    ?>
                                    <div>
                                        <ul class="info-actors">
                                            <?php

                                            foreach ($filmdata as $film) {
                                                foreach ($film['actors'] as $actors) {
                                                    echo '<li>
                                                    <div class="container-actors">
                                                    <img src="' . $actors['photo_url'] . '" alt="' . $actors['firstname'] . $actors['lastname'] . '">
                                                    <p>' . $actors['firstname'] . $actors['lastname'] . '</p>
                                                    </div>
                                                    </li>';
                                                };
                                            }
                                            ?>
                                            <!-- <li>
                                                <div class="container-actors">
                                                    <img src="assets/img/BryceDallas.png" alt="Bryce Dalas Howard">
                                                    <p>Bryce Dallas Howard</p>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a class="buy-tickets" href="index.php">
                <div>
                    <h1>Koop Je Tickets</h1>
                </div>
            </a>
        </div>
    </div>
</main>
<?php include 'assets/includes/footer.php'; ?>