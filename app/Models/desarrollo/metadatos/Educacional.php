<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Educacional extends Model
{
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    public $timestamps = false;
    use HasFactory;
}
