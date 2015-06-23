<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    public function account()
    {
        return $this->belongsTo('TORUSlimpium\Models\Account');
    }

    public function workplace()
    {
        return $this->hasOne('TORUSlimpium\Models\Workplace');
    }



}