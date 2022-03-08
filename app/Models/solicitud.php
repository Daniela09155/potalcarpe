<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class solicitud extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'solicitudc';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre_colaborador','tipo_sol', 'fecha_inicio', 'fecha_final', 'Descripcion'];
    protected $dates = ['deleted_at'];
}
