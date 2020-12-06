<?php
// Permet de charger les dépendances PHP
require_once 'vendor/autoload.php';

// On utilise Carbon pour gérer les dates
use Carbon\Carbon;

// On défini le fuseau sur Paris
date_default_timezone_set('Europe/Paris');

// Transforme le texte en date
$date = Carbon::make('2020-09-29 12:46:00')->locale('fr_FR');

// On affiche le resultat de maniere compréhensible
echo $date->diffForHumans();