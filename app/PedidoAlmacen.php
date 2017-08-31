<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoAlmacen extends Model
{
   #indicamos a que tabla apunta
	protected $table = 'pedidoalmacen';

	protected $fillable = [
  	'periodo_id' , 'numero', 'fecha', 'unegocio_id', 'tcambio', 'tercero_id', 'nombre', 'direccion','sucursal_id', 'almacen_id', 'movimientotipo_id', 'tipoventa_id', 'puntoventa_id', 'vendedor_id', 'moneda_id', 'condicionpago_id', 'documento_id', 'glosa', 'precio', 'importe', 'ventana', 'estado', 'cotizacion_id', 'ordentrabajo_id', 'ordencompra_id', 'almacendestino_id', 'usuario'
  ];
}
