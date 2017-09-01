<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UndTransporte extends Model
{
	#a que tabla apuntara
  protected $table = 'undtransporte';

  protected $fillable = [
  	'codigo' , 'descripcion', 'tipo', 'centrocosto_id', 'modelo_id', 'marca_id', 'color_id', 'tercero_id','anio', 'aniomodelo', 'version', 'placa', 'nromotor', 'nrochasis', 'nrovin', 'nroregistro', 'estado', 'tipocarroceria_id', 'foto', 'constanciamtc', 'configveh', 'capacidad', 'consumo', 'consumo1', 'consumo2', 'consumo3', 'consumo4', 'ruedas', 'repuesto', 'ejes', 'pesoseco', 'pesobruto', 'cargautil', 'largo', 'ancho', 'alto', 'asientos', 'pasajeros', 'cilindros', 'tipocombustible_id','usuario', 'pais_id','regmante', 'observaciones'
  ];

}
