<?php
use setasign\Fpdi\Fpdi;
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Composer'. DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR .'autoload.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'fpdf184'. DIRECTORY_SEPARATOR .'fpdf.php';


$diretorio = __DIR__ . DIRECTORY_SEPARATOR . 'pdf_for_merge';

$diretorio_percorrido = array_diff(
                            scandir($diretorio), 
                            array('..','.')
                        );
$pdf = new Fpdi();
foreach($diretorio_percorrido as $dir){
    $dir_concat = $diretorio . DIRECTORY_SEPARATOR . $dir;
    $contagem_pag = $pdf->setSourceFile($dir_concat);
    for($i = 0; $i < $contagem_pag; $i++){
        $tpl = $pdf->importPage($i+1);
        $pdf->AddPage();
        $pdf->useTemplate($tpl);
    }
}

$diretorio_save = __DIR__ . DIRECTORY_SEPARATOR . 'pdf_merged';

$pdf->Output('F');