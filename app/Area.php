<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $IdAreas
 * @property $NombreArea
 * @property $Sede_IdSede
 *
 * @property Equipo[] $equipos
 * @property Sede $sede
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'IdAreas' => 'required',
		'NombreArea' => 'required',
		'Sede_IdSede' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdAreas','NombreArea','Sede_IdSede'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany('App\Equipo', 'Areas_IdAreas', 'IdAreas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sede()
    {
        return $this->hasOne('App\Sede', 'IdSede', 'Sede_IdSede');
    }
    

}
