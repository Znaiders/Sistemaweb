<?php

namespace Sistema_Web;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //


     protected $table='registrarsolicitud';
    
    protected $primaryKey="idsolicitud";
    
    public $timestamps=false;
    
    protected $fillable=[
        'Nombre',
        'Carrera',
        'Domicilio',
        'Perido',
        'NoControl',
        'NoSeguro',
        'Ciudad',
        'Telefono',
        'Email',
        'NombreProyecto',
        'Opcion'];
}
