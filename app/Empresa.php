<?php

namespace Sistema_Web;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{   
protected $table='empresa';
protected $primaryKey="RfcEmpresa";
 public $timestamps=false;

 protected $fillable=
 [
 'RfcEmpresa',
 'TipoEmpresa',
 'Domicilio',
 'Colonia',
 'CodigoPostal',
 'Fax',
  'Ciudad',
  'TelefonoCelular',
  'MisionEmpresa',
  'NombreTitular',
  'PuestoTitular',
  'NombreExterno',
  'PuestoExterno',
  'NombreAcuerdo',
  'PuestoAcuerdo',
  ];

}
