<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model {


    public function assignment()
    {
        return $this->belongsToMany('TORUSlimpium\Models\Role');
    }

}