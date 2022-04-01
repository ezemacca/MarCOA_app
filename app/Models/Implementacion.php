<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implementacion extends Model
{
    use HasFactory;

    protected $fillable=['decision'];

    public function desarrollo()
    {
       return $this->belongsTo(Desarrollo::class);
    }
}
