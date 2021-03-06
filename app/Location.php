<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /* Model whitelist: allow these fields to be mass-assigned */
    protected $fillable = ['location', 'active'];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
