<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $table='rol';
    protected $primaryKey='id';
    protected $fillable=[
        'Nombre_Rol'
    ];


}
