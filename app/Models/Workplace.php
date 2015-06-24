<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model {


    public function account()
    {
        return $this->belongsTo('TORUSlimpium\Models\Account');
    }

}