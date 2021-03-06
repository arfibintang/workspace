<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpacePhoto extends Model
{
    //
    protected $guard = [];

    // protected $fillable = ['path'];

    public function space()
    {
        return $this->belongsTo(Space::class, 'space_id', 'id');
    }
}
