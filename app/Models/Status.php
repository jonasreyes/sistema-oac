<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /** 
     * la migración que incorpora foreingkeys es el modelo que puede generar métodos hasMany() sobre los mismas tables relacionadas.
     * el modelo que es incorporado como clave foranea en otra migración se expresa con belongsTo()
     */
    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
}
