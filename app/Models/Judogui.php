<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Judogui extends Model
{
    use HasFactory;
    protected $table = 'judogui';
    protected $fillable = ['idCompetidor', 'imgJudogui', 'marca', 'modelo', 'talla', 'color']; // Declaras los campos de la tabla de la base de datos.
    function vendedor(){
        return $this->belongsTo('App\Models\Competidor', 'idCompetidor');
    }
}
