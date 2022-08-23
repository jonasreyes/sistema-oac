<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['state_id','name', 'capital'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
    
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
