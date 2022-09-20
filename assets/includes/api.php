 <?php
    $rawData = file_get_contents('https://annexbios.nickvz.nl/api/');
    $annex = json_decode($rawData, true);
    $annexLength = sizeof($annex["filmdata"]);
    $filmdata = $annex["filmdata"];
