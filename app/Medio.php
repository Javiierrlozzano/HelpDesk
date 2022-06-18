<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medio
 *
 * @property $IdMedios
 * @property $MediosSolicitud
 *
 * @property Ticke[] $tickes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medio extends Model
{
    
    static $rules = [
		'IdMedios' => 'required',
		'MediosSolicitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdMedios','MediosSolicitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickes()
    {
        return $this->hasMany('App\Ticke', 'idMedios_Medios', 'IdMedios');
    }
    

}
