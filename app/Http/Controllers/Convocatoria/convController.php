<?php

namespace App\Http\Controllers\Convocatoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class convController extends Controller{
    public function index(Request $request){
        //$associateid = base64_decode($request->associateid);
        $associateid = $request->associateid;
        $conection = \DB::connection('sqlsrv');
            $direjec = $conection->select("SELECT * FROM Ranking_Dir_Eje2 with(nolock) ORDER BY VGP_Ranking DESC;");
            $plaadel = $conection->select("SELECT * FROM Ranking_Lideres with(nolock) ORDER BY VGP_Ranking DESC;");
            $estatuspersonal = $conection->select("SELECT * FROM RankingGral WHERE Associateid = $associateid;");
            $vpperiodo1 = $conection->select("SELECT VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $vgpperiodo1 = $conection->select("SELECT VGPAcumulado FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $incorporadosperiodo1 = $conection->select("SELECT Incorp_VP100 FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $kinyaperiodo1 = $conection->select("SELECT KINYA_GP FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $genealogia = $conection->select("exec [dbo].[Gen_ConvNY] $associateid;");
            $winPuntosV = $conection->select("SELECT * FROM RankingGral WHERE Count_PuntosV >= 10");
        \DB::disconnect('sqlsrv');

        return \view('convocatoria/index', compact('associateid', 'direjec', 'plaadel', 'estatuspersonal', 'vpperiodo1', 'vgpperiodo1', 'incorporadosperiodo1', 'kinyaperiodo1', 'genealogia', 'winPuntosV'));
    }
}
