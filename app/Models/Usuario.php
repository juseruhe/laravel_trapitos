<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'usuarios';

    protected $fillable = [

'tipo_documento_id','numero_documento','nombres','apellidos','genero_id','fecha_nacimiento','correo',
'contrasena','direccion','telefono','rol_id'];

public function tipo_documento(){

    return $this->belongsTo(Tipo_Documento::class,'tipo_documento_id');
}

public function genero(){

    return $this->belongsTo(Genero::class,'genero_id');

}

public function rol(){

    return $this->belongsTo(rol::class,'rol_id');
}


}
