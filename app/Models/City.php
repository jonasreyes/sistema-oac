<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['state_id','city', 'capital'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public function attention()
    {
        return $this->hasMany(Attention::class);
    }

    public function entity()
    {
        return $this->hasMany(Entity::class);
    }
}
