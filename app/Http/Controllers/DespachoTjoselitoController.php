<?php

namespace App\Http\Controllers;

use App\PedidoAlmacen;
use App\PedidoAlmacenDetalle;
use App\Periodo;
use Illuminate\Http\Request;

class DespachoTjoselitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodo=date("Ym");
        $query = Periodo::on('tjoselito')->where('codigo', '=', $periodo)->get();
        //consulta
        $despachos = PedidoAlmacenDetalle::on('tjoselito')
            ->join('pedidoalmacen', 'pedidoalmacen_detalle.parent_id', '=','pedidoalmacen.id')
            ->join('almacen', 'pedidoalmacen.almacen_id', '=','almacen.id')
            ->join('comun.tercero', 'pedidoalmacen.tercero_id', '=','tercero.id')
            ->join('undtransporte', 'pedidoalmacen_detalle.centrocosto_id', '=','undtransporte.centrocosto_id')
            ->join('indpetroleo', 'pedidoalmacen.id', '=','indpetroleo.parent_id')
            ->where([
                ['pedidoalmacen_detalle.producto_id',781],
                ['pedidoalmacen.estado', '<>', 'ANULADO'],
                ['pedidoalmacen.periodo_id', '=', $query->first()->id]
            ])->select('pedidoalmacen.fecha','indpetroleo.hora', 'pedidoalmacen.numero', 'pedidoalmacen_detalle.item', 'undtransporte.placa', 'pedidoalmacen_detalle.cantidad', 'almacen.descripcion', 'comun.tercero.codigo', 'comun.tercero.descripcion', 'indpetroleo.odometro', 'indpetroleo.hubometro', 'indpetroleo.scngalonaje', 'indpetroleo.scnkm', 'pedidoalmacen.glosa', 'pedidoalmacen.estado')
            ->orderBy('pedidoalmacen.fecha', 'desc')
            ->orderBy('pedidoalmacen.numero', 'desc')
            ->orderBy('pedidoalmacen_detalle.item')
            #->limit(3)
            ->get();
            return response()->json(['data' => $despachos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function destroy(PedidoAlmacenDetalle $pedidoAlmacenDetalle)
    {
        //
    }
}

/*
"select pa.fecha as fecha, i.hora as hora, pa.numero as numero, pad.item as item, ut.placa as placa,
            pad.cantidad as cantidad, alm.descripcion as grifo,t.codigo,t.descripcion as tercero,
            i.odometro as odometro, i.hubometro as hubometro,i.scngalonaje as scnfuel, i.scnkm as scnkm, pa.glosa as glosa,pa.estado
            from pedidoalmacen_detalle pad 
            join pedidoalmacen pa on pad.parent_id=pa.id
            join almacen alm on alm.id=pa.almacen_id
            join comun.tercero t on t.id=pa.tercero_id
            join undtransporte ut on ut.centrocosto_id=pad.centrocosto_id
            join indpetroleo i on pa.id=i.parent_id
            where pad.producto_id=781 and pa.periodo_id=(select id from periodo where codigo=".$periodo.") and pa.estado!='ANULADO'
            order by fecha DESC, numero desc,item"
*/