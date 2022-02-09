<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class asesorcom extends Model{

    protected $table="asesores_comerciales";
    protected $primaryKey="asc_ide";
    protected $fieldtable = [
        'asc_nombre', 'asc_apellido'
    ];
}