<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model {


    public function enterprise()
    {
        return $this->belongsTo('TORUSlimpium\Models\Enterprise');
    }

}