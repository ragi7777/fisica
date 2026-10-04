<?php

echo "generando ...<br>";

require_once "Clancd.php";

$cland = new Clancd("https://c1.clancd.com", "just-for-a-meowment");

set_time_limit(1000*100);

$formats = [
    'jpg',
    'webp',
    'jpeg',
];

for ($capitulo = 101; $capitulo <= 102; $capitulo ++) {

    for ($imagen=1; $imagen < 60; $imagen ++) {
        //sleep(1);

        echo "testing $capitulo $imagen ...<br>";
        foreach ($formats as $format) {
            foreach ([2,3] as $imageLen) {
                $url = $cland->generateUrlAdvanced($capitulo, $imagen, $format, $imageLen);
                $file = @file_get_contents($url);
                if ($file) {
                    break 2;
                }
            }
        }

        if (! $file) {
            echo "No encontrado $capitulo $imagen $format<br>";
        }

        if ($file) {
            file_put_contents('chapter-'.str_pad($capitulo, 3, '0', STR_PAD_LEFT).'-'.$imagen.'.'.$format, $file);
            echo "Descargado $capitulo $imagen $format<br>";
        }

    }

}

echo "generado<br>";

/*

siguientes pasos:

para forzar todos al mismo colorspace:

    mogrify -colorspace sRGB chapter-*

para crear pdf:

    img2pdf $(ls -v chapter-*) -o resultado.pdf

*/

// https://c1.clancd.com/just-for-a-meowment/chapter-21/004.jpg
