<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoAlmacenDetalle extends Model
{
	#indicamos a que tabla apunta
	protected $table = 'pedidoalmacen_detalle';

	protected $fillable = [
  	'parent_id' , 'item', 'producto_id', 'glosa', 'umedida_id', 'serie', 'lote', 'vencimiento','cantidad', 'centrocosto_id', 'proyecto_id', 'actividad_id', 'atendido', 'usrdscto_id', 'descuento', 'cobertura', 'copago', 'tipo', 'peso', 'preciolista', 'precio', 'importe', 'usuario', 'tercero_id', 'fentrega', 'notas'
  ];    
}
