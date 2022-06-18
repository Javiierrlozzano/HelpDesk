<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $IdEquipos
 * @property $Serial
 * @property $IpAddress
 * @property $Nombre
 * @property $Marca
 * @property $Modelo
 * @property $Areas_IdAreas
 * @property $Sede_IdSede
 * @property $Tipo_IdTipo
 *
 * @property Area $area
 * @property Sede $sede
 * @property Serial[] $serials
 * @property Ticke[] $tickes
 * @property Tipoequipo $tipoequipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'IdEquipos' => 'required',
		'Serial' => 'required',
		'IpAddress' => 'required',
		'Nombre' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Areas_IdAreas' => 'required',
		'Sede_IdSede' => 'required',
		'Tipo_IdTipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdEquipos','Serial','IpAddress','Nombre','Marca','Modelo','Areas_IdAreas','Sede_IdSede','Tipo_IdTipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Area', 'IdAreas', 'Areas_IdAreas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Sede', 'IdSede', 'Sede_IdSede');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function serials()
    {
        return $this->hasMany('App\Serial', 'idEquipo_Equipo', 'IdEquipos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickes()
    {
        return $this->hasMany('App\Ticke', 'idEquipo_Equipo', 'IdEquipos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoequipo()
    {
        return $this->hasOne('App\Tipoequipo', 'IdTipo', 'Tipo_IdTipo');
    }
    

}
