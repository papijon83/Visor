<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Documentos
{

    public function get_fichero_documento($idDocumentoDigital){ //error_log("SELECT BINARIODATOS FROM DOC.DOC_FICHERODOCUMENTO WHERE IDFICHERODOCUMENTO = $idDocumentoDigital"); exit();
        $info = DB::select("SELECT BINARIODATOS FROM DOC.DOC_FICHERODOCUMENTO WHERE IDDOCUMENTODIGITAL = $idDocumentoDigital");
        $arrInfo = $info[0]; //print_r($arrInfo->binariodatos); exit();
        return $arrInfo->binariodatos;
    }

}