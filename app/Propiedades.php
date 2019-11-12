<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
  protected $table = 'datatableserver';  
  public $timestamps = false;
  protected $fillable=['fechahora','longitud', 'latitud', 'imei', 'hg', 'temperatura', 'conductividad', 'ph', 'od', 'saved', 'zona', 'prueba'];
}
