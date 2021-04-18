<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'productos';

    protected $fillable = [

        'nombre_producto', 'imagen', 'talla', 'color', 'material', 'categoria_id', 'clasificacion_id',
        'precio', 'cantidad'];

    public function Clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'clasificacion_id');
    }

    public function Categoria()
    {

        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
