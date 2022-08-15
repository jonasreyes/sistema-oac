<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attention extends Model
{
    use HasFactory;

    protected $fillable = [
           'user_id',
           'entity_id',
           'state_id',
           'city_id',
           'municipality_id',
           'parish_id',
           'address',
           'attention_date',
           'asunto',
           'num_ident',
           'nombre1',
           'nombre2',
           'apellido1',
           'apellido2',
           'telefono1',
           'telefono2',
           'email',
           'category_id',
           'status_id',
           'observacion',
    ];

    public function status()
    {
        return $this->hasMany(Status::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }

    public function entity()
    {
        return $this->hasMany(Entity::class);
    }

    public function state()
    {
        return $this->hasMany(State::class);
    }

    public function city()
    {
        return $this->hasMany(City::class);
    }
    
    public function municipality()
    {
        return $this->hasMany(Municipality::class);
    }

    public function parish()
    {
        return $this->hasMany(Parish::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
