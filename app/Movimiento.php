<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'movimientos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha', 'id_caja', 'monto','tipo', 'id_banco', 'id_cuenta'];

    
}
