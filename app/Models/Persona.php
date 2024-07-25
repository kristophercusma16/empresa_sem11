<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'nPerCodigo';
    protected $fillable = ['cPerApellido','cPerNombre','cPerDireccion','dPerFecNac','nPerEdad','nPerSueldo','cPerRnd','nPerEstado'];
}
