<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $cc
 * @property $pass
 * @property $nombre
 * @property $apellido
 * @property $genero
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Cancione[] $canciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'cc' => 'required',
		'pass' => 'required',
		'nombre' => 'required',
		'apellido' => 'required',
		'genero' => 'required',
		'email' => 'required',
    ];
    protected $primaryKey = 'cc';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cc','pass','nombre','apellido','genero','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function canciones()
    {
        return $this->hasMany('App\Models\Cancione', 'usuariocc', 'cc');
    }
    

}
