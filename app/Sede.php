<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sede
 *
 * @property $IdSede
 * @property $NombreSede
 *
 * @property Area[] $areas
 * @property Equipo[] $equipos
 * @property Tecnico[] $tecnicos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sede extends Model
{
    
    static $rules = [
		'IdSede' => 'required',
		'NombreSede' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdSede','NombreSede'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany('App\Area', 'Sede_IdSede', 'IdSede');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany('App\Equipo', 'Sede_IdSede', 'IdSede');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tecnicos()
    {
        return $this->hasMany('App\Tecnico', 'Sede_IdSede', 'IdSede');
    }
    

}
