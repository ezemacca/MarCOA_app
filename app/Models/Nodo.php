<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Peopleaps\Scorm\Entity\Scorm;
use Peopleaps\Scorm\Model\ScormScoModel;
use Peopleaps\Scorm\Model\ScormModel;


class Nodo extends Model
{
    protected $fillable=['nombre'];

    public function desarrollo()
    {
       return $this->belongsTo(Desarrollo::class);
    }
    public function nodos()
    {
        return $this->hasMany(Nodo::class);
    }

    public function scorm()
    {
        return $this->hasOne(ScormModel::class);
    }

    use HasFactory;
}
