<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndPetroleo extends Model
{
	#indicamos a que tabla apunta
	protected $table = 'indpetroleo';

	protected $fillable = [
  	'parent_id' , 'periodo_id', 'fechaproceso', 'hora', 'tercero_id', 'tracto_id', 'remolque_id', 'hubometro','odometro', 'scngalonaje', 'scnkm', 'tank', 'odometro_re'
  ];
}
