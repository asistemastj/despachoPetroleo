<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TCambio extends Model
{
    #a que db apuntara
	protected $connection = 'comun';
    #a que tabla apuntara
    protected $table = 'tcambio';

    protected $fillable = [
        'codigo', 'descripcion', 'fecha','t_compra', 't_venta', 'estado', 'usuario', 'sbs_compra', 'sbs_venta'
    ];
}
