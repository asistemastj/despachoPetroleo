<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	#a que db apuntara
	protected $connection = 'comun';
    #a que tabla apuntara
    protected $table = 'usuario';

    protected $fillable = [
        'codigo', 'descripcion', 'clave','estipo', 'estado', 'usuario', 'vence', 'pdescuento'
    ];
}
