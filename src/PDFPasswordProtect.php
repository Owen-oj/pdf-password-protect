<?php

namespace Owenoj\PDFPasswordProtect;

use Mpdf\Mpdf;
use Mpdf\MpdfException;
use Mpdf\Output\Destination;
use setasign\Fpdi\PdfParser\CrossReference\CrossReferenceException;
use setasign\Fpdi\PdfParser\PdfParserException;
use setasign\Fpdi\PdfParser\Type\PdfTypeException;

class PDFPasswordProtect
{
    /**
     * @param mixed      $inputFile
     * @param mixed      $outputFile
     * @param mixed      $password
     * @param null|mixed $ownerPassword
     *
     * @throws MpdfException
     * @throws CrossReferenceException
     * @throws PdfParserException
     * @throws PdfTypeException
     *
     * @return void
     */
    public function encrypt($inputFile, $outputFile, $password, $ownerPassword = null)
    {
        $mpdf = new Mpdf();

        $pageCount = $mpdf->setSourceFile($inputFile);

        for ($page = 1; $page <= $pageCount; ++$page) {
            $tplId = $mpdf->importPage($page);
            $wh = $mpdf->getTemplateSize($tplId);
            $mpdf->AddPage($wh['width'] > $wh['height'] ? 'L' : 'P');
            $mpdf->UseTemplate($tplId);
        }

        // set owner password to user password if null
        $ownerPassword = is_null($ownerPassword) ? $password : $ownerPassword;

        $mpdf->SetProtection(['copy', 'print'], $password, $ownerPassword);

        $mpdf->Output($outputFile, Destination::FILE);
    }
}
