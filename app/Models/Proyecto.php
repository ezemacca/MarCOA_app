<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'proyectos';

    protected $fillable = ['user_id','titulo','descripcion','etapa','updated_at','created_at'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function analise()
    {
        return $this->hasOne('App\Models\Analise', 'proyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function coherencia()
    {
        return $this->hasOne('App\Models\Coherencia', 'proyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function desarrollo()
    {
        return $this->hasOne('App\Models\Desarrollo', 'proyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function diseño()
    {
        return $this->hasOne('App\Models\Diseño', 'proyecto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
