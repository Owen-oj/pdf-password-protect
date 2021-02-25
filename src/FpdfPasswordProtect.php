<?php

namespace Owenoj\FpdfPasswordProtect;

use Owenoj\Scripts\FPDF_Protection;

class FpdfPasswordProtect
{
    public $pdf;
    public function __construct()
    {
        $this->pdf = new FPDF_Protection();
    }
    public static function encryptPdf($file,$password,$destinationFileName)
    {
        try {
            $pdf = new \FPDF_Protection();
            $pagecount = $pdf->setSourceFile($file);

            for ($loop = 1; $loop <= $pagecount; $loop++) {
                $tplidx = $pdf->importPage($loop);
                $pdf->addPage();
                $pdf->useTemplate($tplidx);
            }


            $pdf->SetProtection(['print'],$password);

           return $pdf->Output($destinationFileName);

        }catch (\Exception $exception){

        }

    }


}
