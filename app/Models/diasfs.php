<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diasfs extends Model
{
    use SoftDeletes;

    protected $table = 'diasfs';
    protected $primaryKey = 'id_horariof';
    protected $fillable = ['nombre_diaf','nombre_horariof', 'hora_entradaf','hora_salidaf'];
    public $timestamps = false;
    protected $dates = ['deleted_at'];

}
