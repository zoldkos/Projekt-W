<?php

// Konfigurációs fájl beolvasása
$config = include 'config.php';

// Ellenőrizd, hogy a menü paraméter át lett-e adva a GET kérésben
$menu = isset($_GET['menu']) ? $_GET['menu'] : 'fooldal';

// Ellenőrizni, hogy a kért menüpont létezik-e a konfigurációban
if (array_key_exists($menu, $config)) {
    // Ha igen, betöltjük az adott menüpont HTML tartalmát
    include $config[$menu]['file'];
} else {
    // Ha nem létezik a kért menüpont, akkor hibaoldalt jelenítünk meg vagy visszairányítunk az alapértelmezett oldalra
    header('Location: index.php?menu=fooldal');
    exit;
}