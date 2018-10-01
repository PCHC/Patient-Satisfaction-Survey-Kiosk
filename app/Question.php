<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /* Model whitelist: allow these fields to be mass-assigned */
    protected $fillable = ['question', 'active'];

    /* Model blacklist: block these fields from being mass-assigned */
    // protected $guarded = [];

    public function responses()
    {
        $this->hasMany(Response::class);
    }
}
