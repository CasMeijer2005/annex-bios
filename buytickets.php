<?php
// include "assets/includes/db.php";
include "assets/includes/head.php";
include "assets/includes/header.php"
?>

<main>
    <form>
        <div id="ticket-body">
            <div id="main-page">
                <div class="film-title-ticket">
                    <h1>Tickets Bestellen</h1>
                </div>
                <div class="ticket-options">
                    <div class="select">
                        <p>Jurassic World</p>
                    </div>
                    <input class="select" type="date">
                    <select class="select" name="time" id="time">
                        <option value="Filler" selected>Tijdstip</option>
                        <option value="1400">14:00</option>
                        <option value="1730">17:30</option>
                        <option value="2100">21:00</option>
                    </select>
                </div>
                <div class="order-page">
                    <div class=order-page-info>
                        <div class="buy-steps">
                            <h4>Stap 1: Kies je tickets</h4>
                        </div>
                        <div>
                            <div>
                                <div class="ticket-grid-container ticket-info">
                                    <p>Type</p>
                                    <p>Prijs</p>
                                    <p>Aantal</p>
                                </div>
                                <hr>
                                <div class="ticket-grid-container">
                                    <label for="normal-tickets">Normaal</label>
                                    <p class="ticket-price">&#8364; 9,00</p>
                                    <select onchange="calculateTickets();" class="ticket-select" id="normal-tickets" name="normal-tickets">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="ticket-grid-container">
                                    <label for="child-tickets">Kind t/m 11 jaar</label>
                                    <p class="ticket-price" id="child-price">&#8364; 5,00</p>
                                    <select onchange="calculateTickets();" class="ticket-select" id="child-tickets" name="child-tickets">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="ticket-grid-container">
                                    <label for="elder-tickets">65+</label>
                                    <p class="ticket-price">&#8364; 7,00</p>
                                    <select onchange="calculateTickets();" class="ticket-select" id="elder-tickets" name="elder-tickets">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <hr id="bottom-hr">
                            <div class="ticket-voucher">
                                <label id="voucher-text" for="voucher-code">VoucherCode</label>
                                <input id="voucher-input" type="text" value="Code">
                                <input id="voucher-button" type="submit" value="Toevoegen">
                            </div>
                        </div>
                        <div class="choose-seats">
                            <div class="buy-steps">
                                <h4>Stap 2: Kies je stoel</h4>
                            </div>
                            <div class="order-seat-placement">
                                <div id="seats"></div>
                                <div class="order-seat-buttons">
                                    <p class="seat-button" id="available-button">Vrij</p>
                                    <p class="seat-button" id="unavailable-button">Bezet</p>
                                    <p class="seat-button" id="selected-button">Jouw Selectie</p>
                                </div>
                            </div>
                        </div>
                        <div class="order-info">
                            <div class="buy-steps">
                                <h4>Stap 3: Controleer je bestelling</h4>
                            </div>
                            <div class="order-info-border">
                                <div class="order-info-content">
                                    <img class="order-info-poster" src="assets/img/jurassicpark poster.png" alt="filmposter">
                                    <div>
                                        <div class="order-ticket-info">
                                            <h3 class="order-ticket-title">Jurassic World: Fallen Kingdom</h3>
                                            <div class="order-ticket-film-restrictions">
                                                <img src="assets/img/kijkwijzer-12.png" alt="kijkwijzer 12">
                                                <img src="assets/img/kijkwijzer-eng.png" alt="kijkwijzer eng">
                                                <img src="assets/img/kijkwijzer-geweld.png" alt="kijkwijzer geweld">
                                            </div>
                                            <div>
                                                <ul class="order-ticket">
                                                    <li>
                                                        <strong class="additional-info-header">Bioscoop: </strong>
                                                        <p>Hellevoetsluit (Zaal 3)</p>
                                                    </li>
                                                    <li>
                                                        <strong class="additional-info-header">Wanner: </strong>
                                                        <p>11 juni 14:15</p>
                                                    </li>
                                                    <li>
                                                        <strong class="additional-info-header">Stoelen: </strong>
                                                        <p>Rij 2, stoel 7</p>
                                                    </li>
                                                    <li>
                                                        <strong class="additional-info-header">Tickets: </strong>
                                                        <p>1x normaal</p>
                                                    </li>
                                                    <li class="order-ticket-total">
                                                        <strong class="additional-info-header">Totaal 1 ticket: </strong>
                                                        <p>&#8364; 9,00</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="buy-steps">
                                    <h4>Stap 4: Vul je gegevens in</h4>
                                </div>
                                <div class="data-grid">
                                    <input class="name-input" type="text" value="Voornaam">
                                    <input class="name-input" type="text" value="Achternaam*">
                                    <input class="email-input" type="text" value="E-mailadres*">
                                    <input class="email-input" type="text" value="E-mailadres*">
                                </div>
                            </div>
                            <div>
                                <div class="buy-steps">
                                    <h4>Stap 5: Kies je betaalwijze</h4>
                                </div>
                                <div>
                                    <ul class="payment-choice">
                                        <li>
                                            <input type="checkbox" id="gift-card" name="gift-card" value="BioscoopBon">
                                            <label for="gift-card">
                                                <img src="assets/img/nationale-bioscoop-bon.png" alt="Bioscoop bon foto">
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="maestro" name="maestro" value="Maestro">
                                            <label for="gift-card">
                                                <img src="assets/img/maestro.png" alt="Bioscoop bon foto">
                                            </label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ideal" name="ideal" value="IDeal">
                                            <label for="gift-card">
                                                <img src="assets/img/ideal.png" alt="Bioscoop bon foto">
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="tos-container">
                                        <input type="checkbox" id="tos" name="tos" value="TermsOfService">
                                        <label for="tos">
                                            <p>
                                                Ja, ik ga akkoord met de <a id="tos-text" href="index.php" target="_blank">algemene voorwaarden</a>
                                            </p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input class="buy-ticket" type="submit" value="Afrekenen">
            </div>
        </div>
    </form>
</main>
<script src="assets/js/ticket.js"></script>

<?php include "assets/includes/footer.php"; ?>