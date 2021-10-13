<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Documentos
{

    public function get_fichero_documento($idDocumentoDigital,$fichero){ //error_log("SELECT BINARIODATOS FROM DOC.DOC_FICHERODOCUMENTO WHERE IDFICHERODOCUMENTO = $idDocumentoDigital"); exit();
        if($fichero == false){
            $info = DB::select("SELECT BINARIODATOS FROM DOC.DOC_FICHERODOCUMENTO WHERE IDDOCUMENTODIGITAL = $idDocumentoDigital");
            $arrInfo = $info[0]; //print_r($arrInfo->binariodatos); exit();
            return $arrInfo->binariodatos;
        }else{
            $info = DB::select("SELECT BINARIODATOS FROM DOC.DOC_FICHERODOCUMENTO WHERE IDFICHERODOCUMENTO = $idDocumentoDigital");
            $arrInfo = $info[0]; //print_r($arrInfo->binariodatos); exit();
            return $arrInfo->binariodatos;
        }
        
    }

}