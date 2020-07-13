<?php

namespace App\Http\Controllers\Convocatoria;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class convController extends Controller{
    public function index(Request $request){
        //$associateid = base64_decode($request->associateid);
        $associateid = $request->associateid;
        $conection = \DB::connection('sqlsrv');
            $direjec = $conection->select("SELECT top 5 * FROM Ranking_Dir_Eje2 WITH(nolock) ORDER BY VGP_Ranking DESC;");
            $plaadel = $conection->select("SELECT top 5 * FROM Ranking_Lideres WITH(nolock) ORDER BY VGP_Ranking DESC;");
            $estatuspersonal = $conection->select("SELECT * FROM RankingGral WHERE Associateid = $associateid;");
            $estatuspersonalFormInfo = $conection->select("SELECT top 1 * FROM RankingGral WHERE Associateid = $associateid ORDER BY Period DESC;");

            $vpperiodo1 = $conection->select("SELECT top 5 VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $vpperiodo2 = $conection->select("SELECT top 5 VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $vpperiodo3 = $conection->select("SELECT top 5 VP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 202001;");

            $vgpperiodo1 = $conection->select("SELECT top 5 VGP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $vgpperiodo2 = $conection->select("SELECT top 5 VGP_MES FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $vgpperiodo3 = $conection->select("SELECT top 5 VGP_MES FROM RankingGral  WHERE Associateid = $associateid AND period = 202001;");

            $incorporadosperiodo1 = $conection->select("SELECT top 5 Incorp_VP100_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $incorporadosperiodo2 = $conection->select("SELECT top 5 Incorp_VP100_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $incorporadosperiodo3 = $conection->select("SELECT top 5 Incorp_VP100_Mes  FROM RankingGral WHERE Associateid = $associateid AND period = 202001;");

            $kinyaperiodo1 = $conection->select("SELECT top 5 KINYA_GP_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201911;");
            $kinyaperiodo2 = $conection->select("SELECT top 5 KINYA_GP_Mes FROM RankingGral WHERE Associateid = $associateid AND period = 201912;");
            $kinyaperiodo3 = $conection->select("SELECT top 5 KINYA_GP_Mes FROM RankingGral  WHERE Associateid = $associateid AND period = 202001;");

            $genealogia = $conection->select("exec [dbo].[Gen_ConvNY] $associateid, 1;");
            $winPuntosV = $conection->select("SELECT top 5 * FROM RankingGral WHERE Count_PuntosV >= 10");
        \DB::disconnect('sqlsrv');

        return \view('convocatoria/index', compact('associateid', 'direjec', 'plaadel', 'estatuspersonal', 'vpperiodo1', 'vpperiodo2', 'vgpperiodo1', 'vgpperiodo2', 'incorporadosperiodo1', 'incorporadosperiodo2', 'kinyaperiodo1', 'kinyaperiodo2', 'genealogia', 'winPuntosV', 'estatuspersonalFormInfo', 'vpperiodo3', 'vgpperiodo3', 'incorporadosperiodo3', 'kinyaperiodo3'));
    }

    public function genconvnypers(Request $request){
        $associateid = $request->associateid;
        $period = Date("Ym");

        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("EXEC Gen_ConvNY_Pers $associateid, $period;");
        \DB::disconnect('sqlsrv');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function genconvny(Request $request){
        $associateid = $request->associateid;
        $period = Date("Ym");

        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("EXEC Gen_ConvNY $associateid");
        \DB::disconnect('sqlsrv');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function getPuVi(Request $request){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("SELECT DISTINCT Associateid FROM RankingGral WHERE Count_PuntosV >= 10;");
        \DB::disconnect('sqlsrv');

        $pvwinners = "";

        foreach($response as $row){
            $pvwinners = $pvwinners . $row->Associateid . ":";
        }

        return $pvwinners;
    }

    public function repoconvny(){
        return view('convocatoria.reporte', compact('direjec', 'plaadel'));
    }

    public function reportegral(){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("SELECT * FROM ReportConv_NY");
        \DB::disconnect('sqlsrv');

        $data = [
            'data' => $response,
        ];
        return \Response::json($data);
    }

    public function getRankDirExe(){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("SELECT Associateid FROM Ranking_Dir_Eje2 WITH(nolock) ORDER BY VGP_Ranking DESC;");
        \DB::disconnect('sqlsrv');
        $rankDir = "";

        foreach($response as $row){
            $rankDir = $rankDir . $row->Associateid . ":";
        }

        return $rankDir;
    }

    public function getRankPlaAdel(){
        $conection = \DB::connection('sqlsrv');
            $response = $conection->select("SELECT Associateid FROM Ranking_Lideres WITH(nolock) ORDER BY VGP_Ranking DESC;");
        \DB::disconnect('sqlsrv');

        $rankPla = "";

        foreach($response as $row){
            $rankPla = $rankPla . $row->Associateid . ":";
        }

        return $rankPla;
    }
}
