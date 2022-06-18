<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoEquipo
 *
 * @property $IdTipo
 * @property $Tipo
 *
 * @property Equipo[] $equipos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoEquipo extends Model
{
    
    static $rules = [
		'IdTipo' => 'required',
		'Tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTipo','Tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipos()
    {
        return $this->hasMany('App\Equipo', 'Tipo_IdTipo', 'IdTipo');
    }
    

}
