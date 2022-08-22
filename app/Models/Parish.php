<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    use HasFactory;

    protected $fillable = [
        'municipality_id',
        'name'
    ];

    public function attention()
    {
        return $this->hasMany(Attention::class);
    }

    public function entity()
    {
        return $this->hasMany(Entity::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
