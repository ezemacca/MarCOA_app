<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coherencia extends Model
{
    use HasFactory;

    protected $fillable = ['proyecto_id','coherencia_p1','coherencia_p2','coherencia_p3','coherencia_p4','coherencia_p5','coherencia_p6','coherencia_p7','coherencia_p8'];
     public $timestamps = false;
    protected $casts = [
        'options' => 'array',
    ];
    
    public function proyecto(){
       return $this->belongsTo(Proyecto::class);
    }
   
}
