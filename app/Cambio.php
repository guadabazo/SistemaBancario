<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cambios';

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
    protected $fillable = ['fecha', 'valor', 'id_moneda'];

    
}
