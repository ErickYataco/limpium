<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model {

    public function assignments()
    {
        return $this->hasMany('TORUSlimpium\Models\Assignment');
    }

}