<?php

class Clancd
{

    private $domain;
    private $serie;

    function __construct($domain, $serie)
    {
        $this->domain = $domain;
        $this->serie = $serie;
    }

    private function generateUrlCDN($serie, $chapterFormateado, $imagenFormateada, $format = 'jpg')
    {
        // Construir la URL
        return "{$this->domain}/{$serie}/{$chapterFormateado}/{$imagenFormateada}.{$format}";
    }

    function generateUrlAdvanced($chapter, $numberImage, $format = 'jpg', $imageLen = 3)
    {
        $serie = $this->serie;
        $chapterFormateado = 'chapter-' . $chapter;
        $imagenFormateada = str_pad($numberImage, $imageLen, '0', STR_PAD_LEFT);

        if ($chapter == 88) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '59ff77f3e729adc0fc0fff44cbdd2394';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 92) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '39213e006de36dc8daf983a47265db69';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 93) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = 'f4b2efa0c1a6d9d4c98462ac85cd00ed';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 94) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '7d845176a0ed69240b9033430d737919';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 97) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '2ec629486257a8f5071f0e1b79467dea';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 99) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '4d0ad7ba346a1134d59c98fbd2c4adab';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 100) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '958dbcd5b8cc07882fa5b6e67b7501c4';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 101) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '733dfb69e429ad0c53bb4d8e49a4c7a2';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        if ($chapter == 102) {
            $serie = 'manga_637895178547076101';
            $chapterFormateado = '6379804721ffd1d3a2bf631fbca7f733';
            $imagenFormateada = str_pad($numberImage, 2, '0', STR_PAD_LEFT);
        }

        // Construir la URL
        return $this->generateUrlCDN($serie, $chapterFormateado, $imagenFormateada, $format);
    }

}

// https://c1.clancd.com/just-for-a-meowment/chapter-21/004.jpg
