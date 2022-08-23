<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Masterminds\HTML5\Entities;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name'
    ];

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

    public function parishes()
    {
        return $this->hasMany(Parish::class);
    }
}
