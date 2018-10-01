<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /* Model whitelist: allow these fields to be mass-assigned */
    protected $fillable = ['location', 'active'];

    public function responses()
    {
        $this->hasMany(Response::class);
    }
}
