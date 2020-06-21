<?php
# 015
$loader = require __DIR__ . '/../vendor/autoload.php';

$ob = new webcrew\Webcrew;

$ob->authors();

$ob->newvar="blue or yellow?";

browse($ob,2);

// przy okazji :
$ob=100; // poszedł destruktor, bo do obiektu klasy Webcrew nie odnosi się już żadna referencja, zatem automatyczny zbieracz śmieci (garbage collection) zrobił swoje. Przy okazji, to nie rozumiem skąd ta nazwa. Moim zdaniem to powinna być nazwa:
// *Destroyer of all worlds, annihilator of all beings* // - prawda, że lepsza?

hr();

use webcrew\Imagination as Img;
$ob = new Img; // wszystko pięknie załadowane! Niech żyją ułatwienia.
hr();
?>