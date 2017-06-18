<?php namespace Sistema_Web;


namespace Sistema_Web;

use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    protected $table='proyecto';
    
    protected $primaryKey="IdProyecto";
    
    public $timestamps=false;
    
    protected $fillable=[
        'NombreProyecto',
        'ProyectoPdf'];

}
