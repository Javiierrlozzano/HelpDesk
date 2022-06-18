<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ticke
 *
 * @property $IdTickes
 * @property $DescripcionProblema
 * @property $Estado
 * @property $NivelUrgencia
 * @property $Usuario
 * @property $created_at
 * @property $updated_at
 * @property $idTecnicos_Tecnicos
 * @property $idEquipo_Equipo
 * @property $idMedios_Medios
 *
 * @property Equipo $equipo
 * @property Medio $medio
 * @property Tecnico $tecnico
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ticke extends Model
{
    
    static $rules = [
		'IdTickes' => 'required',
		'DescripcionProblema' => 'required',
		'Estado' => 'required',
		'NivelUrgencia' => 'required',
		'Usuario' => 'required',
		'idTecnicos_Tecnicos' => 'required',
		'idEquipo_Equipo' => 'required',
		'idMedios_Medios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['IdTickes','DescripcionProblema','Estado','NivelUrgencia','Usuario','idTecnicos_Tecnicos','idEquipo_Equipo','idMedios_Medios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Equipo', 'IdEquipos', 'idEquipo_Equipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medio()
    {
        return $this->hasOne('App\Medio', 'IdMedios', 'idMedios_Medios');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tecnico()
    {
        return $this->hasOne('App\Tecnico', 'IdTecnicos', 'idTecnicos_Tecnicos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'Usuario');
    }
    

}
