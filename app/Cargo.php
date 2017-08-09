<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public $timestamps = false;
    protected $table= 'cargos';
    protected $primaryKey = 'car_id';
    protected $fillable = ['car_nombre', 'car_apellido', 'car_correo', 'car_profesion', 'car_tipo', 'car_foto'];
}
