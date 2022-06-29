<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapeo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'mapeos';

    protected $fillable = ['multimedial_id','nodo','descripcion','plantilla','updated_at','created_at'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function multimedial()
    {
        return $this->hasOne('App\Models\Multimedial', 'id', 'multimedial_id');
    }
    
}
