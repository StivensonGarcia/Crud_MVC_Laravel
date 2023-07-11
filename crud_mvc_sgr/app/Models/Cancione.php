<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cancione
 *
 * @property $id
 * @property $nombre
 * @property $ritmo
 * @property $duracion
 * @property $album
 * @property $posicionenalbum
 * @property $banda
 * @property $interprete
 * @property $autor
 * @property $fechalanzamiento
 * @property $usuariocc
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cancione extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ritmo' => 'required',
		'duracion' => 'required',
		'album' => 'required',
		'posicionenalbum' => 'required',
		'banda' => 'required',
		'interprete' => 'required',
		'autor' => 'required',
		'fechalanzamiento' => 'required',
		'usuariocc' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ritmo','duracion','album','posicionenalbum','banda','interprete','autor','fechalanzamiento','usuariocc'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'cc', 'usuariocc');
    }
    

}
