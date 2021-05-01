<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'materiales';

    protected $fillable = [

        'material'
    ];

    public function productos(){

        return $this->hasMany(Producto::class,'id');
    }
}
