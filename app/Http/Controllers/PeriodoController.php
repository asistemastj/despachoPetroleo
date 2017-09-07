<?php

namespace App\Http\Controllers;

use App\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodos = Periodo::on('tjc')->where('codigo', 'like', '2%')->get();
        #$periodos = Periodo::all();
        return response()->json(['data' => $periodos]);
    }

    public function prueba(Request $request){
        date_default_timezone_set("America/Lima");
        $fecha=date("Y-m-d");
        $hora=date("H:i:s");
        $periodo=date("Ym");
        $tcambio=date("Ymd");
        dd($hora);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Periodo  $periodo
     * @return \Illuminate\Http\Response
     */
    public function show(Periodo $periodo)
    {
        //
    }

}
