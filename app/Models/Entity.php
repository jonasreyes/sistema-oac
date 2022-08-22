<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'state_id',
        'city_id',
        'municipality_id',
        'parish_id',
        'address',
        'cod_postal',
        'latitude',
        'longitude',
        'name',
        'siglas',
        'competencias',
        'fullname_authority',
        'email',
        'web',
        'emblema',
        'twitter',
        'telegram',
        'instagram',
        'facebook',
        'venapp',
        'vk',
        'tiktok'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class); 
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    public function parish()
    {
        return $this->belongsTo(Parich::class);
    }
}
