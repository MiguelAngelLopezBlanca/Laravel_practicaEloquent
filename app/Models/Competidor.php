<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competidor extends Model
{
    use HasFactory;
    protected $table = 'competidor';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellidos', 'edad', 'imgCompetidor']; // Declaras los campos de la tabla de la base de datos.
    function compra(){
        return $this->hasMany('App\Models\Judogui', 'idCompetidor');
    }
}
