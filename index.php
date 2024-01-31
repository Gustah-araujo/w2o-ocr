<?php

use Spatie\PdfToImage\Pdf;
use thiagoalessio\TesseractOCR\TesseractOCR;

require_once('vendor/autoload.php');

$files = scandir('pdf');

foreach ($files as $file) {

    if ( str_ends_with($file, '.pdf') ) {

        $textFile  = str_replace('.pdf', '.txt', $file);
        $imageFile = str_replace('.pdf', '.png', $file);

        $pdf = new Pdf("pdf/{$file}");
        $pdf->saveImage("img/{$imageFile}");

        $result = ( new TesseractOCR("img/{$imageFile}") )->run();

        file_put_contents("string/{$textFile}", $result);

        $regex = '/Nome Empresarial:? (.+?)\n/';

        echo "Lendo arquivo {$file}\r\n";

        if (preg_match($regex, $result, $matches)) {
            $nomeEmpresarial = trim($matches[1]);

            echo "$nomeEmpresarial\r\n";
        } else {
            echo "Nome empresarial não encontrado.\r\n";
        }

    }

}

exit;