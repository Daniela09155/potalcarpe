<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class hrflex extends Model
{
  
    use SoftDeletes;

    protected $table = 'hrflexes';
    protected $primaryKey = 'id_horariof';
    protected $fillable = ['nombre_horario', 'd1','d2','d3','d4','d5','rango_horas','useridf'];
    protected $dates = ['deleted_at'];
}
