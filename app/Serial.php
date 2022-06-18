<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Serial
 *
 * @property $IdSeriales
 * @property $Serial
 * @property $Estado
 * @property $idEquipo_Equipo
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Serial extends Model
{
    
    static $rules = [
		'IdSeriales' => 'required',
		'Serial' => 'required',
		'Estado' => 'required',
		'idEquipo_Equipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdSeriales','Serial','Estado','idEquipo_Equipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Equipo', 'IdEquipos', 'idEquipo_Equipo');
    }
    

}
