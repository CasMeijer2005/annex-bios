<?php
require_once "assets/includes/db.php";
include 'assets/includes/api.php';
include "assets/includes/head.php";
include "assets/includes/header.php";


?>
<div class="bgn">
    <div class="blok1">
        <div class="welkom-text">
            <h3 id="welkom-2">WELKOM BIJ ANNEXBIOS BILTHOVEN</h3>
            <h3 id="if">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</h3>
            <a href="filmagenda.php"><button id="btn-kies">BEKIJK DE DRAAIENDE FILMS</button></a>
        </div>
    </div>
    <div class="film-agenda">
    </div>
    <div class="blok2">
        <ul><iframe id="google" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1232.6981619616763!2d4.132889234987656!3d51.83545731900257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c451c6f4434d53%3A0x20bb4b6bcdd57904!2sRijksstraatweg%2042%2C%203223%20KA%20Hellevoetsluis!5e0!3m2!1snl!2snl!4v1663063420458!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="tekst2">
                <ul>
                    <img id="location" src="assets/img/location.png">
                    <h3 id="tekst3"> Rijksstraatweg 42 <br>
                        3223 KA Hellevoetsluis</h3>
                    <img id="phone" src="assets/img/phone.png">
                    <h3 id="tekst3"> 020-12345678
                        <div id="text4">
                            <h2 id="t4">Bereikbaarheid</h2>
                            <h4 id="t5" t>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ab maxime
                                ducimus assumenda praesentium corrupti expedita placeat eveniet explicabo provident?
                            </h4>
                        </div>


                </ul>
            </div>
        </ul>
        <img id="Helle" src="assets/img/Hellevoetssluis.png">


    </div>
</div>
<div class="bgn2">
    <div class="filmag">
        <h2 id="filmag1">FILMAGENDA</h2>
    </div>
    <div class="menu2">
        <div id="films"><input type="radio" id="films">
            <label for="films">FILMS</label>
        </div>

        <div id="week"><input type="radio" id="week">
            <label for="week">DEZE WEEK</label>
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
                <button id="btn-draaiende"><a href="filmpage.php?movie=' . array_search($filmdata[$eee]['film_id'], array_column($filmdata, 'film_id')) . '">MEER INFO & TICKETS</a></button>
                

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
                <button id="btn-draaiende"><a href="filmpage.php?movie=' . array_search($filmdata[$eee]['film_id'], array_column($filmdata, 'film_id')) . '">MEER INFO & TICKETS</a></button>

            </div>
        </div>';
        }
        ?>


    </div>
</div>
</div>
</div>

<?php
include 'assets/includes/footer.php'; ?>