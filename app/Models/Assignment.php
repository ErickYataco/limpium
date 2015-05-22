<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {

    /**
     * roles() many-to-many relationship method
     *
     * @return QueryBuilder
     */
    public function worker()
    {
        return $this->belongsTo('TORUSlimpium\Models\Worker');
    }
    public function attendance()
    {
        return $this->hasMany('TORUSlimpium\Models\Attendance')->where('day_attendance',date("Y-m-d"));
    }
}