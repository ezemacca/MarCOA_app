<?php

namespace App\Models\Desarrollo\Metadatos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derechos extends Model
{
    public function metadatos(){
       return $this->belongsTo(Metadatos::class);
    }
    use HasFactory;
    public $timestamps = false;
}
