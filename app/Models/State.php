<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'iso_3166_2'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
}
