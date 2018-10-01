<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    /* Model whitelist: allow these fields to be mass-assigned */
    protected $fillable = ['location_id', 'question_id', 'response'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
