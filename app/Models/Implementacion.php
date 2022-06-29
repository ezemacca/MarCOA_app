<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\desarrollo\Desarrollo;
use Peopleaps\Scorm\Entity\Scorm;
use Peopleaps\Scorm\Model\ScormScoModel;
use Peopleaps\Scorm\Model\ScormModel;

class Implementacion extends Model
{
    use HasFactory;

    protected $fillable=['decision'];
    public $timestamps = false;

    public function desarrollo()
    {
       return $this->belongsTo(Desarrollo::class);
    }

        public function scorm()
    {
        return $this->hasMany(ScormModel::class);
    }

}
