<?php

namespace Owenoj\PdfPasswordProtect;

class PdfPasswordProtect
{
    /**
     * @throws \Mpdf\MpdfException
     * @throws \setasign\Fpdi\PdfParser\CrossReference\CrossReferenceException
     * @throws \setasign\Fpdi\PdfParser\PdfParserException
     * @throws \setasign\Fpdi\PdfParser\Type\PdfTypeException
     */
    public function encrypt($inputFile, $outputFile, $password, $ownerPassword = null)
    {
        $mpdf = new \Mpdf\Mpdf();
    
        $pageCount = $mpdf->setSourceFile($inputFile);
    
        for ($page = 1; $page <= $pageCount; $page++) {
            $tplId = $mpdf->importPage($page);
            $wh = $mpdf->getTemplateSize($tplId);
            $mpdf->AddPage($wh['width'] > $wh['height'] ? 'L' : 'P');
            $mpdf->UseTemplate($tplId);
        }

        //set owner password to user password if null
        $ownerPassword = is_null($ownerPassword) ? $password : $ownerPassword;

        $mpdf->SetProtection(array('copy', 'print'), $password, $ownerPassword);

        $mpdf->Output($outputFile, \Mpdf\Output\Destination::FILE,);
    }
}
