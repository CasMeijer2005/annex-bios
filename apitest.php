<?php
include 'assets/includes/api.php';

$id = 12;
// foreach ($filmdata as $film) {
//     foreach ($film['actors'] as $actors) {
//         echo '<img src="' . $actors['photo_url'] . '" alt="' . $actors['firstname'] . $actors['lastname'] . '">
//     <p>' . $actors['firstname'] . $actors['lastname'] . '</p>';
//     };
// }
// foreach ($film['actors'] as $actors) {
//     echo '<img src="' . $actors['photo_url'] . '" alt="' . $actors['firstname'] . $actors['lastname'] . '">
//     <p>' . $actors['firstname'] . $actors['lastname'] . '</p>';
// };

// for ($i = 0; $i < $annexLength; $i++) {
//     // $actors = $film['actors'];
//     print_r($filmdata[$i]);
//     if ($film['film_id'] == $id) {
//         echo $film['film_title'];
//         print_r($film['actors']);
//     }

//     echo '<img src="' . $actors['photo_url'] . '" alt="' . $actors['firstname'] . $actors['lastname'] . '">
//     <p>' . $actors['firstname'] . $actors['lastname'] . '</p>';
// }
foreach ($filmdata as $film) {
    foreach ($film['actors'] as $actors) {
        echo '<li>
    <div class="container-actors">
    <img src="' . $actors['photo_url'] . '" alt="' . $actors['firstname'] . $actors['lastname'] . '">
    <p>' . $actors['firstname'] . $actors['lastname'] . '</p>
    </div></li>';
    };
}
