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
        $periodos = Periodo::on($request->db)->where('codigo', 'like', '2%')->get();
        #$periodos = Periodo::all();
        return response()->json(['data' => $periodos]);
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
