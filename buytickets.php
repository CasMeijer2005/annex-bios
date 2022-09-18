<?php
include "assets/includes/db.php";
include "assets/includes/head.php";
include "assets/includes/header.php"
?>

<main >
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
                                <hr id="top-hr">
                                <div class="ticket-grid-container">
                                    <label for="normal-tickets">Normaal</label>
                                    <p class="ticket-price">&#8364; 9,00</p>
                                    <select class="ticket-select normal-tickets" name="normal-tickets">
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
                                    <p class="ticket-price">&#8364; 5,00</p>
                                    <select class="ticket-select child-tickets" name="child-tickets">
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
                                    <select class="ticket-select elder-tickets" name="elder-tickets">
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
                    </div>
                    <div class="order-seat-placement">
                        <img src="assets/img/zaal_paars.png" alt="Zaal img">
                        <div class="order-seat-buttons">
                            <input id="voucher-button" type="submit" value="Vrij">
                            <input id="voucher-button" type="submit" value="Bezet">
                            <input id="voucher-button" type="submit" value="Jouw Selectie">
                        </div>
                    </div>
                </div>
            </div>
            <input class="buy-tickets btn" type="submit" value="Afrekenen">
        </div>
    </form>
</main>

<?php include "assets/includes/footer.php"; ?>