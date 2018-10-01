<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /* Model whitelist: allow these fields to be mass-assigned */
    protected $fillable = ['question', 'active'];

    /* Model blacklist: block these fields from being mass-assigned */
    // protected $guarded = [];
}
