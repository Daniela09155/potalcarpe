<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class horario extends Model
{
    use SoftDeletes;

    protected $table = 'horarios';
    protected $primaryKey = 'id_horario';
    protected $fillable = ['nombre_horario','hora_entrada','hora_salida', 'fecha_inicio', 'fecha_final'];
    protected $dates = ['deleted_at'];
}
