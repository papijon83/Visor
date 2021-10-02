<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use App\Models\Documentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Hamcrest\Arrays\IsArray;
use Log;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class VisorController extends Controller
{
    protected $modelDocumentos;

    public function __construct()
    {
        //
    }

    public function visor(Request $request)
    {
        $idDocumentoDigital = $request->query('idDocumentoDigital');

        $this->modelDocumentos = new Documentos();
        $archivo = $this->modelDocumentos->get_fichero_documento($idDocumentoDigital);

        $path = base_path().'/public/Docs';
        $rutaArchivos = $path;
        $fileXml = fopen($rutaArchivos."/".$idDocumentoDigital.".docx", "w");
        fwrite($fileXml,$archivo);
        fclose($fileXml);
        
        $ruta = url("Docs/".$idDocumentoDigital.".docx");

        return view('visor',['ruta' => $ruta]);
    }
}