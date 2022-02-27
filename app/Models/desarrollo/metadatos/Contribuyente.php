<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{

    protected $fillable = ['ciclo_p3_cont_1','ciclo_p3_cont_2','ciclo_p3_cont_3'];

    use HasFactory;

    
    
    public function ciclos()
    {
       return $this->belongsTo(Ciclo::class);
    }
    public $timestamps = false;
}
