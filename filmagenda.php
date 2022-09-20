<?php
include 'assets/includes/db.php';
include 'assets/includes/head.php';
include 'assets/includes/header.php';
?>
<div class="bgn2">
    <div class="filmag">
        <h2 id="filmag1">FILMAGENDA</h2>
    </div>
    <div class="menu2">
        <div id="films"><input type="radio" id="films">
            <label for="films">FILMS</label>
        </div>

        <div id="week"><input type="radio" id="week">
            <label for="vandaag">DEZE WEEK</label>
        </div>

        <div id="vandaag"><input type="radio" id="vandaag">
            <label for="vandaag">VANDAAG</label>
        </div>

        <select id="Category" name="movies" id="Category">
            <option value="Filler" selected id="category">Category</option>
            <option value="JurassicPark">Jurassic Park: Fallen Kingdom</option>
            <option value="DeadPool2">DeadPool 2</option>
            <option value="Solo">Solo: A Star Wars Story</option>
        </select>
    </div>
    <div class="flex">
        <?php
        $rawData = file_get_contents('https://annexbios.nickvz.nl/api/');
        $annex = json_decode($rawData, true);
        $annexLength = sizeof($annex["filmdata"]);
        $filmdata = $annex["filmdata"];

        for ($eee = 0; $eee < $annexLength; $eee++) {
            echo '<div class="filmposter">
            <img class="poster" src=" ' . $filmdata[$eee]["film_photo"] . '">
            <div id="textfilm">
                <h2 id="tf">' . $filmdata[$eee]["film_title"] . '</h2>
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <h4 id="tf2">'  . $filmdata[$eee]["film_releasedate"] . '
                </h4>
                <h4 id="tf3">' . $filmdata[$eee]["film_shortinfo"] . '</h4>
                <button id="btn-draaiende">MEER INFO & TICKETS</button>

            </div>
        </div>';
        }
        for ($eee = 0; $eee < $annexLength; $eee++) {
            echo '<div class="filmposter">
            <img class="poster" src=" ' . $filmdata[$eee]["film_photo"] . '">
            <div id="textfilm">
                <h2 id="tf">' . $filmdata[$eee]["film_title"] . '</h2>
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <img id="star" src="assets/img/Path 23.png">
                <h4 id="tf2">'  . $filmdata[$eee]["film_releasedate"] . '
                </h4>
                <h4 id="tf3">' . $filmdata[$eee]["film_shortinfo"] . '</h4>
                <button id="btn-draaiende">MEER INFO & TICKETS</button>

            </div>
        </div>';
        }
        ?>


    </div>
</div>