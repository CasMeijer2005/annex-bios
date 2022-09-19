<?php

// Mustache handmatig geinstalleerd 
//require __DIR__ . '/Mustache/Autoloader.php'; 
//Mustache_Autoloader::register();

// Mustache met Composer geinstalleerd 
require __DIR__ . '/vendor/autoload.php';

$m = new Mustache_Engine(array('entity_flags' => ENT_QUOTES));
echo $m->render('Hello {{planet}}', array('planet' => 'World!'));
