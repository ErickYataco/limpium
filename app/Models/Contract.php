<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    public function enterprise()
    {
        return $this->belongsTo('TORUSlimpium\Models\Enterprise');
    }

    public function workplace()
    {
        return $this->hasOne('TORUSlimpium\Models\Workplace');
    }



}