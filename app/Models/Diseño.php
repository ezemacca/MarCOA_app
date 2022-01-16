<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diseño extends Model
{
    protected $fillable = ['proyecto_id','subetapa'];

    use HasFactory;
    public $timestamps = false;
}
