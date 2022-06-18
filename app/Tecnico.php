<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 *
 * @property $IdTecnicos
 * @property $TipoDoc
 * @property $Doc
 * @property $Nombre
 * @property $Estado
 * @property $Sede_IdSede
 *
 * @property Sede $sede
 * @property Ticke[] $tickes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tecnico extends Model
{
    
    static $rules = [
		'IdTecnicos' => 'required',
		'TipoDoc' => 'required',
		'Doc' => 'required',
		'Nombre' => 'required',
		'Estado' => 'required',
		'Sede_IdSede' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTecnicos','TipoDoc','Doc','Nombre','Estado','Sede_IdSede'];


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
    public function tickes()
    {
        return $this->hasMany('App\Ticke', 'idTecnicos_Tecnicos', 'IdTecnicos');
    }
    

}
