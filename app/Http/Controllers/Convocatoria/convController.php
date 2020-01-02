<?php

namespace App\Http\Controllers\Convocatoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class convController extends Controller{
    public function index(Request $request){
        //$associateid = base64_decode($request->associateid);
        $associateid = $request->associateid;
        $conection = \DB::connection('sqlsrv');
            $direjec = $conection->select("SELECT top 10 * FROM Ranking_Dir_Eje2 WITH(nolock) ORDER BY VGP_Ranking DESC;");
            $plaadel = $conection->select("SELECT top 10 * FROM Ranking_Lideres WITH(nolock) ORDER BY VGP_Ranking DESC;");
            $estatuspersonal = $conection->select("SELECT * FROM RankingGral WHERE Associateid = $associateid;");
            $estatuspersonalFormInfo = $conection->select("SELECT top 1 * FROM RankingGral WHERE Associateid = $associateid ORDER BY Period DESC;");

            $vpperiodo1 = $conection->select("SELECT VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $vpperiodo2 = $conection->select("SELECT VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $vpperiodo3 = $conection->select("SELECT VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 202001;");

            $vgpperiodo1 = $conection->select("SELECT VGP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $vgpperiodo2 = $conection->select("SELECT VGP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $vgpperiodo3 = $conection->select("SELECT VGP_MES FROM RankingGral  WHERE Associateid = $associateid AND period = 202001;");

            $incorporadosperiodo1 = $conection->select("SELECT Incorp_VP100_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $incorporadosperiodo2 = $conection->select("SELECT Incorp_VP100_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $incorporadosperiodo3 = $conection->select("SELECT Incorp_VP100_Mes  FROM RankingGral WHERE Associateid = $associateid AND period = 202001;");

            $kinyaperiodo1 = $conection->select("SELECT KINYA_GP_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $kinyaperiodo2 = $conection->select("SELECT KINYA_GP_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $kinyaperiodo3 = $conection->select("SELECT KINYA_GP_Mes FROM RankingGral  WHERE Associateid = $associateid AND period = 202001;");

            $genealogia = $conection->select("exec [dbo].[Gen_ConvNY] $associateid;");
            $winPuntosV = $conection->select("SELECT * FROM RankingGral WHERE Count_PuntosV >= 10");
        \DB::disconnect('sqlsrv');

        return \view('convocatoria/index', compact('associateid', 'direjec', 'plaadel', 'estatuspersonal', 'vpperiodo1', 'vpperiodo2', 'vgpperiodo1', 'vgpperiodo2', 'incorporadosperiodo1', 'incorporadosperiodo2', 'kinyaperiodo1', 'kinyaperiodo2', 'genealogia', 'winPuntosV', 'estatuspersonalFormInfo', 'vpperiodo3', 'vgpperiodo3', 'incorporadosperiodo3', 'kinyaperiodo3'));
    }
}
