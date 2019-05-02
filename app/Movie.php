<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $appends = ['grade', 'actors'];

    public function getGradeAttribute() {
        return $this->hasOne('App\Grade')->get();
    }

    public function getActorsAttribute() {
        return $this->belongsToMany('App\Actor')->get();
    }

    public function actors() {
        return $this->belongsToMany('App\Actor');
    }

    public function grade() {
        return $this->hasOne('App\Grade');
    }
}
