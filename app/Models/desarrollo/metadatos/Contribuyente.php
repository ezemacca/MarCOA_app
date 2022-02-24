<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{

    protected $fillable = ['ciclo_p3_cont-1','ciclo_p3_cont-2','ciclo_p3_cont-3'];
    use HasFactory;
    public $timestamps = false;
}
