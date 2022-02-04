<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class consulta extends Model{

    protected $table="puntos_venta";
    protected $primaryKey="pdv_ide";
    protected $fieldtable = [
        'pdv_nombre', 'pdv_direccion'
    ];
}