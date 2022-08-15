<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'iso_3166_2'];

    public function city()
    {
        return $this->hasMany(City::class);
    }

    public function municipality()
    {
        return $this->hasMany(Municipality::class);
    }

    public function entity()
    {
        return $this->hasMany(Entity::class);
    }

    public function attention()
    {
        return $this->hasMany(Attention::class);
    }
}
