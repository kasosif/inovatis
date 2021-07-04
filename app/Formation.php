<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $guarded = [];

    public function specialites() {
        return $this->hasMany(Specialite::class);
    }
}
